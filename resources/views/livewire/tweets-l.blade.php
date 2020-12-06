<div>
   
@foreach($tweets as $tweet)
<div class="flex p-4 border-b border-b-gray-400">
 
    
 <div class="mr-4 flex-shrink-0">
     <a href="{{route('profile', $tweet->user)}}">

     <x-avatar search="{{$tweet->user->name}}" class="inline-block h-9 w-9 rounded-full"
          src="https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessoriesType=Blank&facialHairType=Blank&clotheType=BlazerSweater&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light" 
          alt=""/> 

     </a>
 </div>
 <div>
     <h5 class="font-bold mb-1">
     <a href="{{route('profile', $tweet->user->name)}}">
         {{$tweet->user->name}}</h5></a>
         <p class = "text-sm">
             {{$tweet->body}}
         </p>
  </div>                      

</div>
@endforeach
</div>
