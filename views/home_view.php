<!-- <div id="result-posts" class="container mx-auto mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3"></div>

<script>
    // Fetch and display posts
fetch('https://jsonplaceholder.typicode.com/posts')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    const resultDiv = document.getElementById('result-posts');

    // Loop through the data and create styled post elements
    data.forEach(post => {
      const postContainer = createPostContainer(post);
      resultDiv.appendChild(postContainer);
    });
  })
  .catch(error => {
    console.error('Error during posts API request', error);
  });

// Function to create a post container
function createPostContainer(post) {
  const postContainer = document.createElement('div');
  postContainer.classList.add('bg-white', 'p-6', 'rounded', 'shadow-md');

  const IdElement = document.createElement('p');
  IdElement.textContent = `ID: ${post.id}`;
  IdElement.classList.add('text-gray-600', 'mb-2');
  postContainer.appendChild(IdElement);

  const userIdElement = document.createElement('p');
  userIdElement.textContent = `User ID: ${post.userId}`;
  userIdElement.classList.add('text-gray-600', 'mb-2');
  postContainer.appendChild(userIdElement);

  const titleElement = document.createElement('h2');
  titleElement.textContent = post.title;
  titleElement.classList.add('text-xl', 'font-bold', 'mb-2');
  postContainer.appendChild(titleElement);

  const bodyElement = document.createElement('p');
  bodyElement.textContent = post.body;
  bodyElement.classList.add('text-gray-800');
  postContainer.appendChild(bodyElement);

  return postContainer;
}

</script> -->


<!-- Your HTML structure -->
<div id="result-posts" class="container mx-auto mt-8 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
  <script>
    // Fetch and display posts
    fetch('https://jsonplaceholder.typicode.com/posts')
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        // Loop through the data and add posts to the container
        data.forEach(post => {
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
          authorInfo.className = 'flex items-center mt-8 space-x-4';

          const authorImage = document.createElement('img');
          authorImage.className = 'w-10 h-10 rounded-full dark:bg-gray-500';
          authorImage.src = 'https://source.unsplash.com/100x100/?portrait';
          authorImage.alt = '';

          const authorDetails = document.createElement('div');

          const authorName = document.createElement('h3');
          authorName.className = 'text-sm font-medium';
          authorName.textContent = 'Leroy Jenkins';

          const postDate = document.createElement('time');
          postDate.className = 'text-sm dark:text-gray-400';
          postDate.setAttribute('datetime', '2021-02-18');
          postDate.textContent = 'Feb 18th 2021';

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
        console.error('Error during posts API request', error);
      });
  </script>
</div>

