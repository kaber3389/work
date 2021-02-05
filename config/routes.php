<?php
return [
    '/'                                 => 'site/index',
    'leadership/<slug:.+>'              => 'leadership/view',
    'product/<slug:.+>'                 => 'products/view',
    'news/<slug:.+>'                    => 'news/view',
    'leaderships'                       => 'leadership/index',
    'products'                          => 'products/index',
    'services'                          => 'services/index',
    'news'                              => 'news/index',

    /* админка */
    'admin/products'                    => 'admin/products',
    'admin/products/create'             => 'admin/product-create',
    'admin/products/edit/<slug:.+>'     => 'admin/product-edit',
    'admin/leadership/create'           => 'admin/leadership-create',
    'admin/leadership/edit/<slug:.+>'   => 'admin/leadership-edit',
    'admin/leadership'                  => 'admin/leadership',
    'admin/news'                        => 'admin/news',
    'admin/news/create'                 => 'admin/news-create',
    'admin/news/edit/<slug:.+>'         => 'admin/news-edit',
    'admin/vacancies'                   => 'admin/vacancies',
    'admin/pages'                       => 'admin/pages',
];