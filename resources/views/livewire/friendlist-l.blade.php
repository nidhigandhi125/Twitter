<div>
<ul>
    @foreach(auth()->user()->follows as $user)

    <li class="mb-7">

        <div class="flex items-center text-sm"  >
        <a href="{{route('profile', $user)}}">

            <x-avatar search="{{$user->name}}" class="inline-block h-9 w-9 rounded-full" src='https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessoriesType=Blank&facialHairType=Blank&clotheType=BlazerSweater&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'/>
            {{$user->name}}
        </div>

    </li>
    @endforeach
</ul>
</div>
