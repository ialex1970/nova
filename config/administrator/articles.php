<?php

return [
    'title' => 'Articles',
    'single' => 'article',
    'model' => 'App\Article',
    'columns' => [
        'id',
        'active',
        'title',
        'short',
        'category_id',
        'user_id',
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'user' => [
            'type' => 'relationship',
            'title' => 'User',
            'name_field' => 'name',
        ],
        'category' => [
            'type' => 'relationship',
            'title' => 'Category',
            'name_field' => 'name',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'short' => [
            'type' => 'wysiwyg',
        ],
        'full' => [
            'type' => 'wysiwyg',
        ],
/*        'published_at' => [
        'type' => 'date',
        'date_format' => 'y-m-d'
        ],*/
        'image' => [
            'type' => 'image',
            'location' => public_path() . '/uploads/articles/original/',
            'sizes' => [
                [282, 150, 'auto', public_path() . '/uploads/articles/small/', 100],
                [596, 270, 'auto', public_path() . '/uploads/articles/large/', 100],
            ],
        ],
    ],
    'form_width' => 596,
];