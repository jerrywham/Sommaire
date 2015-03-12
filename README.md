# Sommaire
Add an automatic menu for articles in pluxml

Article have to have css class "article-content".
Only h1 and h2 in your article are take into account.

If you want add an other level, you have to add selectors in Sommaire.js file
```javascript
$(".article-content h1, .article-content h2, .article-content h3, .article-content h4, .article-content h5").each(function(i) {...
```
instead of :
```javascript
$(".article-content h1, .article-content h2").each(function(i) {...
```
