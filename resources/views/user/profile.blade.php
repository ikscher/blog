<!--
   // var_dump($user);
   // foreach($user as $u){
   // 	  echo $u->user_name;
   // }
   // // echo $user->user_name;
   // // echo $email;
   // echo $count;
-->

<div class="container">
    @foreach ($users as $user)
        {{ $user->user_name }}
    @endforeach
</div>

{{ $users->links() }}