<div>
   {!! view('components.front.version-pages.version'.$version.'.app-components.shopping-cart',[
    'cartItems'=>$cartItems,
    'cartCount'=>$cartCount,
    'cartTotal'=>$cartTotal,
   ]) !!}
</div>
