<?php
/**
 *
 * ked chcem pridat dalsi bod eshop, tak do navig pridam novy
 * bod eshop. Ked chcem mat novy bod clanky, pridam sem novy bod clanky
 */

return[


  'home' =>[
      'label' => 'Úvod',
       'href' => BASE_PATH,
  ],

  'contact' =>[
       'label'=> 'Kontakt',
       'href' => BASE_PATH . '?page=contact',
  ],

 'blog' =>[
       'label' => 'Blog',
        'href' => BASE_PATH . '?page=blog',
  ],

 'e-shop' =>[
        'label' => 'Eshop',
        'href' => BASE_PATH . '?page=eshop',
 ],

 'articles' =>[
        'label' => 'Články',
        'href' => BASE_PATH . '?page=articles',
 ],

    'admin' =>[
        'label' => 'admin',
        'href' => BASE_PATH . '?page=admin',
    ],

];