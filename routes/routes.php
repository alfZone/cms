<?php

//...... to add on routes

//Text Articles
Route::get('/manager/articlesCategories', function(){  require _CAMINHO_ADMIN. "managerArticlesCategorie.php";});
Route::post('/manager/articlesCategories', function(){  require _CAMINHO_ADMIN. "managerArticlesCategorie.php";});
Route::get('/manager/articles', function(){  require _CAMINHO_ADMIN. "managerArticles.php";});
Route::post('/manager/articles', function(){  require _CAMINHO_ADMIN. "managerArticles.php";});
Route::get(['set' => '/articles/{cat}/list', 'as' => 'articles.seeArticlesList'], 'ControllerArticles@seeArticlesList');				//WS with Articles List.

//stats
Route::get(['set' => '/numCategorie', 'as' => 'articles.numCategorie'], 'ControllerArticles@numCategorie');				//number of categories
Route::get(['set' => '/numArticles', 'as' => 'articles.numArticles'], 'ControllerArticles@numArticles');				//number of articles

//...
