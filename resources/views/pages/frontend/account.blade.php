@extends('layout.app')

@section('title', 'nom du roman')

@section('content')
  <div class="text-center">
    <h3>Mon compte</h3>
    <div class="avatar">
      <img src="https://place-hold.it/150" alt="une image de ton avatar">
    </div>
    <div class="id">
      <span>Pseudo :</span>
      <span>mon pseudo</span>
    </div>
    <div class="change-pwd">
      <form class="change-pwd" action="" method="post">
        <div>
          <input type="password" name="old-pwd" id="old-pwd" placeholder="tapez votre ancien mot de passe"/>
        </div>
        <div>
          <input type="password" name="new-pwd1" id="new-pwd1" placeholder="tapez votre nouveau mot de passe"/>
        </div>
        <div>
          <input type="password" name="new-pwd2" id="new-pwd2" placeholder="retapez votre nouveau mot de passe"/>
        </div>
        <div>
          <input type="submit" name="submit" id="submit" value="valider" />
        </div>
      </form>
    </div>
  </div>



@endsection
