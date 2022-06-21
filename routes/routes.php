<?php

//...... to add on routes

//Text Articles
Route::get('/manager/articlesCategories', function(){  require _CAMINHO_ADMIN. "managerArticlesCategorie.php";});
Route::post('/manager/articlesCategories', function(){  require _CAMINHO_ADMIN. "managerArticlesCategorie.php";});
Route::get('/manager/articles', function(){  require _CAMINHO_ADMIN. "managerArticles.php";});
Route::post('/manager/articles', function(){  require _CAMINHO_ADMIN. "managerArticles.php";});
Route::get(['set' => '/articles/{cat}/list', 'as' => 'articles.seeArticlesList'], 'ControllerArticles@seeArticlesList');				//WS with Articles List.

//...