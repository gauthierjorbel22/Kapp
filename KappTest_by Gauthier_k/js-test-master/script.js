var postManager = function () {

    var container = document.getElementById('content');

    // YOUR CODE HERE
    /* You have to order the following posts by userId (Ascending) then add them in a list inside the 'container' */

   

var z = document.createElement("ul");
z.setAttribute('id', 'posts');
var d = container.append(z);

let postsArr = postManager.prototype.posts;
postsArr.sort(function (a, b) {
    return a.userId - b.userId;
});

for (let i = 0; i < postManager.prototype.posts.length; i++) {
    let li = document.createElement('li');
    z.appendChild(li);
    let id = document.createElement("span");
    let title = document.createElement("h1");
    let body = document.createElement("p");

//appendint children to the li
    li.appendChild(id);
    li.appendChild(title);
    li.appendChild(body);

    title.innerHTML = title.innerHTML + postManager.prototype.posts[i].userId + " " + postManager.prototype.posts[i].title;
    body.innerHTML = body.innerHTML + postManager.prototype.posts[i].body;

}

};


postManager.prototype.posts = [
    {
        userId: 3,
        id: 1,
        title: "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
        body: "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
    },
    {
        userId: 3,
        id: 2,
        title: "qui est esse",
        body: "est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"
    },
    {
        userId: 2,
        id: 3,
        title: "ea molestias quasi exercitationem repellat qui ipsa sit aut",
        body: "et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut"
    },
    {
        userId: 1,
        id: 4,
        title: "eum et est occaecati",
        body: "ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit"
    }, {
        userId: 5,
        id: 5,
        title: "nesciunt quas odio",
        body: "repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque"
    },
];




new postManager();
