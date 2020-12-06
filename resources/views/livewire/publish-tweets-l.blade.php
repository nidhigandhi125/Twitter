<div>
<x-header header="Trending"/>

<div class="border border-blue-400 rounded-lg px-4 py-3 mb-8">
                        <form action="/tweets" method="POST" >
                        @csrf
                            <textarea  wire:model="body"
                                class="w-full rounded" cols="40" rows="5" placeholder="What's happening!!!!" ></textarea>

                                <hr class = "my-4"> 
                                @error('body')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                            <p class = "my-1">

                                <footer class="flex justify-between">
                                    <x-avatar search="{{auth()->user()->name}}" class="inline-block h-9 w-9 rounded-full"
                                        src="https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessoriesType=Blank&facialHairType=Blank&clotheType=BlazerSweater&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light" 
                                        alt=""/>
                                

                                <button wire:click.prevent="store"  wire:click="$emitTo('personaltimeline','addtweets()')" class="bg-blue-500 rounded-lg shadow py-2 px-2 p-8 text-white ml-2">Tweet
                                </button>
                                </footer>
                        </form>
                    @if(session()->has('message'))
                    <div class="text-green-400 text-sm alert alert-success">{{session('message')}}
                    </div>
                    @endif
                       
                    </div>

</div>
