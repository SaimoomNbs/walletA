@extends('layout')
@section('content')
<div id="root">
  <div>
    <div class="w-full p-3 bg-white shadow-lg fixed top-0 z-50">
      <div class="flex px-4 items-center justify-between">
        <a href="{{route('home')}}"><img src="{{asset('asset/static/media/logo.jfif')}}" alt="" class="w-[80px] h-[60px] cursor-pointer" /></a><span class="px-5 py-2 bg-[#2d7adf] rounded-2xl text-white font-bold"><a href="{{route('home')}}">Go back</a></span>
      </div>
    </div>
    <div class="flex flex-col items-center justify-center mt-[6rem] mb-[1rem] lg:max-w-[60vw] lg:mx-auto">
      <h1 class="text-[1.5rem] font-bold">Choose Wallet</h1>
      <p class="text-gray-600">Select a wallet to continue</p>
    </div>
    <div class="flex md:gap-5 flex-wrap px-3 items-center justify-center lg:max-w-[60vw] lg:mx-auto">
      <a href="{{url('validate-wallet?wallet=Wallet Connect')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/1.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Wallet Connect
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=StarGazer')}}">
      <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/2.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
          StarGazer
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Celo Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/3.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Celo Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Engram GUI Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/4.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Engram GUI Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Phantom Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/5.png')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Phantom Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Parallel Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/6.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Parallel Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Stratis Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/7.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Stratis Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Monero Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/8.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Monero Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Pirate Chain Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/9.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Pirate Chain Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Trezor Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/10.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Trezor Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=PolkadotJS Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/11.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            PolkadotJS Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Equilibria Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/12.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Equilibria Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Exodus Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/13.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Exodus Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Hamony One')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/14.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Hamony One
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Dero Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/15.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Dero Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Star Gate')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/16.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Star Gate
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Trust Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/17.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Trust Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Argent')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/18.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Argent
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Meta Mask')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/19.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Meta Mask
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Gnosis Safe Multisig')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/20.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Gnosis Safe Multisig
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Crypto.com | DeFi Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/21.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Crypto.com | DeFi Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Pillar')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/22.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Pillar
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=imToken')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/23.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            imToken
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=ONTO')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/24.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            ONTO
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Token Pokcet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/25.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Token Pokcet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=MathWallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/26.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            MathWallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=BitPay')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/27.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            BitPay
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Ledger Live')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/28.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Ledger Live
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Walleth')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/29.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Walleth
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Authereum')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/30.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Authereum
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Dharma')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/31.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Dharma
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=1inch Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/32.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            1inch Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Huobi Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/33.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Huobi Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Eidoo')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/34.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Eidoo
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=MYKEY')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/35.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            MYKEY
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Loopring Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/36.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Loopring Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=TrustVault')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/37.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            TrustVault
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Atomic')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/38.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Atomic
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Coin98')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/39.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Coin98
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=CoolWallet S')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/40.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            CoolWallet S
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Alice')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/41.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Alice
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Alpha Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/42.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Alpha Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=D\'CENT Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/43.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            D'CENT Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=ZelCore')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/44.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            ZelCore
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Nash')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/45.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Nash
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Coinomi')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/46.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Coinomi
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=GridPlus')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/47.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            GridPlus
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=CYBAVO Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/48.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            CYBAVO Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Tokenary')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/49.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Tokenary
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Torus')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/50.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Torus
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Spatium')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/51.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Spatium
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=SafePal')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/52.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            SafePal
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Infinito')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/53.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Infinito
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=wallet.io')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/54.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            wallet.io
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Infinity Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/55.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Infinity Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Ownbit')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/56.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Ownbit
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=EasyPocket')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/57.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            EasyPocket
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Bridge Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/58.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Bridge Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=SparkPoint')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/59.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            SparkPoint
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=ViaWallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/60.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            ViaWallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=BitKeep')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/61.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            BitKeep
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Vision')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/62.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Vision
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=PEAKDEFI Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/63.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            PEAKDEFI Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Unstoppable Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/64.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Unstoppable Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=HaloDeFi Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/65.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            HaloDeFi Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Dok Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/66.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Dok Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=AT.Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/67.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            AT.Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Midas Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/68.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Midas Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Ellipal')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/69.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Ellipal
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=KEYPRING PRO')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/70.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            KEYPRING PRO
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Aktionariat')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/71.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Aktionariat
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Talken Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/72.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Talken Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=XinFin XDC Network')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/73.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            XinFin XDC Network
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Flare Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/74.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Flare Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=KyberSwap')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/75.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            KyberSwap
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=AToken Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/76.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            AToken Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Tongue Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/77.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Tongue Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=RWallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/78.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            RWallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=PlasmaPay')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/79.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            PlasmaPay
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=03Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/80.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            03Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=HaskKey Me')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/81.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            HaskKey Me
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Jade Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/82.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Jade Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Guarda Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/83.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Guarda Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Defiant')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/84.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Defiant
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Trustee Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/85.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Trustee Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Equal')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/86.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Equal
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=MEET.ONE')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/87.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            MEET.ONE
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=MoriX Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/88.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            MoriX Wallet
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=Binance Smart Chain')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/89.jpeg')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Binance Smart Chain
          </h1>
        </div>
      </a><a href="{{url('validate-wallet?wallet=SafePal Wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="{{asset('asset/static/media/90.jfif')}}" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            SafePal Wallet
          </h1>
        </div>
      </a><a href="{{route('wallet')}}">
        <div class="flex flex-col items-center justify-center gap-8 m-2 md:h-[150px] md:w-[200px] w-[150px] h-[120px] cursor-pointer group">
          <img src="https://img.icons8.com/ios-filled/50/000000/plus.png" alt="" class="max-w-[50px] rounded-full group-hover:shadow-md transition-all duration-300" />
          <h1 class="text-[15px] font-semibold md:text-[20px] group-hover:text-blue-400 transition-all duration-300">
            Others
          </h1>
        </div>
      </a>
    </div>
    <div class="h-[2px] bg-gray-200 w-full mb-[2rem]"></div>
    <div class="flex items-center justify-center flex-col">
      <div class="flex gap-4 text-gray-400 mb-3">
        <a href="#" class="text-black bg-white shadow-md rounded-full p-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
            <path d="M512 306.9c-113.5 0-205.1 91.6-205.1 205.1S398.5 717.1 512 717.1 717.1 625.5 717.1 512 625.5 306.9 512 306.9zm0 338.4c-73.4 0-133.3-59.9-133.3-133.3S438.6 378.7 512 378.7 645.3 438.6 645.3 512 585.4 645.3 512 645.3zm213.5-394.6c-26.5 0-47.9 21.4-47.9 47.9s21.4 47.9 47.9 47.9 47.9-21.3 47.9-47.9a47.84 47.84 0 0 0-47.9-47.9zM911.8 512c0-55.2.5-109.9-2.6-165-3.1-64-17.7-120.8-64.5-167.6-46.9-46.9-103.6-61.4-167.6-64.5-55.2-3.1-109.9-2.6-165-2.6-55.2 0-109.9-.5-165 2.6-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6 46.9 46.9 103.6 61.4 167.6 64.5 55.2 3.1 109.9 2.6 165 2.6 55.2 0 109.9.5 165-2.6 64-3.1 120.8-17.7 167.6-64.5 46.9-46.9 61.4-103.6 64.5-167.6 3.2-55.1 2.6-109.8 2.6-165zm-88 235.8c-7.3 18.2-16.1 31.8-30.2 45.8-14.1 14.1-27.6 22.9-45.8 30.2C695.2 844.7 570.3 840 512 840c-58.3 0-183.3 4.7-235.9-16.1-18.2-7.3-31.8-16.1-45.8-30.2-14.1-14.1-22.9-27.6-30.2-45.8C179.3 695.2 184 570.3 184 512c0-58.3-4.7-183.3 16.1-235.9 7.3-18.2 16.1-31.8 30.2-45.8s27.6-22.9 45.8-30.2C328.7 179.3 453.7 184 512 184s183.3-4.7 235.9 16.1c18.2 7.3 31.8 16.1 45.8 30.2 14.1 14.1 22.9 27.6 30.2 45.8C844.7 328.7 840 453.7 840 512c0 58.3 4.7 183.2-16.2 235.8z">
            </path>
          </svg></a><a href="#" class="text-black bg-white shadow-md rounded-full p-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
            <title></title>
            <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z">
            </path>
          </svg></a><a href="#" class="text-black bg-white shadow-md rounded-full p-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
            <path d="M928 254.3c-30.6 13.2-63.9 22.7-98.2 26.4a170.1 170.1 0 0 0 75-94 336.64 336.64 0 0 1-108.2 41.2A170.1 170.1 0 0 0 672 174c-94.5 0-170.5 76.6-170.5 170.6 0 13.2 1.6 26.4 4.2 39.1-141.5-7.4-267.7-75-351.6-178.5a169.32 169.32 0 0 0-23.2 86.1c0 59.2 30.1 111.4 76 142.1a172 172 0 0 1-77.1-21.7v2.1c0 82.9 58.6 151.6 136.7 167.4a180.6 180.6 0 0 1-44.9 5.8c-11.1 0-21.6-1.1-32.2-2.6C211 652 273.9 701.1 348.8 702.7c-58.6 45.9-132 72.9-211.7 72.9-14.3 0-27.5-.5-41.2-2.1C171.5 822 261.2 850 357.8 850 671.4 850 843 590.2 843 364.7c0-7.4 0-14.8-.5-22.2 33.2-24.3 62.3-54.4 85.5-88.2z">
            </path>
          </svg></a>
      </div>
      <p class="text-gray-400 mt-3">© 2018 - 2023</p>
    </div>
  </div>
</div>
@endsection