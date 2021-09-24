{{-- Vue de la page, type de la page (classe css) pour conditions, classes de la page (body) --}}
@extends('layouts.app', ['page_type' => 'security', 'body_classes' => 'bg-gray-100'])

@section('content')
@include('components.navbar')

<div class="mt-6 mb-6 lg:grid lg:grid-cols-12 lg:gap-x-5">
  @include('settings.components.sidenav')

  <div class="mr-6 space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
    <form action="#" method="POST">
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-6 space-y-6 bg-white sm:p-6">
          <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">Mot de passe</h3>
            <p class="mt-1 text-sm text-gray-500">Modifiez votre mot de passe et ne l'oubliez pas.</p>
          </div>

          <div class="grid grid-cols-6 gap-6">

            <div class="col-span-6 sm:col-span-2">
              <label for="phone-number" class="block text-sm font-medium text-gray-700">Ancien mot de passe</label>
              <input type="password" name="old-password" id="old-password" autocomplete="old-pwd" pattern="[A-Za-z0-9-_.]{5,20}" value="" class="block w-full px-3 py-2 mt-1 transition duration-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="phone-number" class="block text-sm font-medium text-gray-700">Nouveau mot de passe</label>
              <input type="password" name="new-password" id="new-password" autocomplete="new-pwd" pattern="[A-Za-z0-9-_.]{5,20}" value="" class="block w-full px-3 py-2 mt-1 transition duration-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="phone-number" class="block text-sm font-medium text-gray-700">Confirmer nouveau mot de passe</label>
              <input type="password" name="confirm-password" id="confirm-password"" autocomplete="confirm-pwd" pattern="[A-Za-z0-9-_.]{5,20}" value="" class="block w-full px-3 py-2 mt-1 transition duration-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
          </div>
        </div>
        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
          <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white duration-150 transform bg-blue-500 border border-transparent rounded-md shadow-sm hover:scale-105 hover:shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">
            Sauvegarder
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection