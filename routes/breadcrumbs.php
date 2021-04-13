<?php
// Home
Breadcrumbs::for('config.home', function ($trail) {
    $trail->push('Home', route('site.home'));
});

// Home > Configuration
Breadcrumbs::for('config.index', function ($trail) {
    $trail->parent('config.home');
    $trail->push('Configuration', route('config.index'));
});

// Home > Configuration > Company
Breadcrumbs::for('config.company', function ($trail) {
    $trail->parent('config.index');
    $trail->push('Company', route('config.company'));
});

/*// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});*/