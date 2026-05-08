window.onload = loadSnippets;

function loadSnippets(){
fetch('snippets/fetch.php')
.then(res => res.text())
.then(data => {
document.getElementById('snippetList').innerHTML = data;
Prism.highlightAll();
});
}

function addSnippet(){
let title = document.getElementById('title').value;
let language = document.getElementById('language').value;
let code = document.getElementById('code').value;

fetch('snippets/add.php',{
method:'POST',
headers:{'Content-Type':'application/x-www-form-urlencoded'},
body:`title=${title}&language=${language}&code=${encodeURIComponent(code)}`
})
.then(res=>res.text())
.then(()=>{
loadSnippets();
});
}

function deleteSnippet(id){
fetch('snippets/delete.php',{
method:'POST',
headers:{'Content-Type':'application/x-www-form-urlencoded'},
body:`id=${id}`
})
.then(()=>loadSnippets());
}