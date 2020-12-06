<div>
<form method ="GET" action= "/search">
        {{csrf_field()}}
        <input type="text" class="form-control border border-blue-400 rounded-lg px-4 py-2" wire:model="searchTerm" placeholder="Search..."/>  
             
               <x-button name="Search"></x-button>
               </form>
               
        @if(!empty($users))
        @foreach($users as $user)
        <br>
       <a href="{{route('profile', $user->name)}}">

        <x-avatar search="{{$user->name}}" class="inline-block h-9 w-9 rounded-full"
        src="https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessoriesType=Blank&facialHairType=Blank&clotheType=BlazerSweater&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light" 
        alt=""/>    
        {{$user->name}}
        </a>
        <br>       
        @endforeach
        @endif
</div>
 

                