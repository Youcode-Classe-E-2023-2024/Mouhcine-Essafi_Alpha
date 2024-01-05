<!-- Your HTML structure -->
<div id="result-posts" class="container mx-auto mt-8 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
    <script>
        var users = [];
        // Fetch and display posts
        fetch('https://jsonplaceholder.typicode.com/posts')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(dataPost => {

                fetch('https://jsonplaceholder.typicode.com/users')
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(dataUsers => {
                        users = dataUsers;
                        console.log(users);
                        console.log(dataPost);
                        // Loop through the data and add posts to the container
                        dataPost.forEach(post => {
                            const postContainer = document.createElement('div');
                            postContainer.className = 'max-w-md p-6 mx-2 overflow-hidden rounded-lg shadow bg-gray-900 text-gray-100';

                            const article = document.createElement('article');

                            const title = document.createElement('h2');
                            title.className = 'text-2xl font-bold';
                            title.textContent = post.title;

                            const body = document.createElement('p');
                            body.className = 'mt-4 dark:text-gray-400';
                            body.textContent = post.body;

                            const authorInfo = document.createElement('div');
                            authorInfo.className = 'flex items-center bg-gray-700 mt-8 space-x-4';

                            const authorImage = document.createElement('img');
                            authorImage.className = 'w-10 h-10 rounded-full dark:bg-gray-500';
                            authorImage.src = 'https://source.unsplash.com/100x100/?portrait';
                            authorImage.alt = '';

                            const authorDetails = document.createElement('div');

                            const authorName = document.createElement('h3');
                            authorName.className = 'text-sm font-medium';
                            authorName.textContent = users[post.userId - 1].name;

                            const postDate = document.createElement('time');
                            postDate.className = 'text-sm dark:text-gray-400';
                            postDate.textContent = users[post.userId - 1].email;

                            // Construct the DOM structure
                            authorDetails.appendChild(authorName);
                            authorDetails.appendChild(postDate);

                            authorInfo.appendChild(authorImage);
                            authorInfo.appendChild(authorDetails);

                            article.appendChild(title);
                            article.appendChild(body);
                            article.appendChild(authorInfo);

                            postContainer.appendChild(article);

                            document.getElementById('result-posts').appendChild(postContainer);
                        });
                    })
                    .catch(error => {
                        console.error('Error during users API request', error);
                    });


            })
            .catch(error => {
                console.error('Error during posts API request', error);
            });
    </script>
</div>