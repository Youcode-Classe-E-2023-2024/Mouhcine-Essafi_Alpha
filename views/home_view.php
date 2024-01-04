<div id="result-posts" class="container mx-auto mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3"></div>

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

</script>