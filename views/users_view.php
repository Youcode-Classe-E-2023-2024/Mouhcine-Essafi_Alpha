    <div id="result-users" class="container mx-auto mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3"></div>
    
<script>
// Fetch and display users
fetch('https://jsonplaceholder.typicode.com/users')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    const resultDiv = document.getElementById('result-users');

    // Loop through the data and create styled user elements
    data.forEach(user => {
      const userContainer = createUserContainer(user);
      resultDiv.appendChild(userContainer);
    });
  })
  .catch(error => {
    console.error('Error during users API request', error);
  });

// Function to create a user container
function createUserContainer(user) {
  const userContainer = document.createElement('div');
  userContainer.classList.add('bg-white', 'p-6', 'rounded', 'shadow-md');

  const nameElement = document.createElement('h2');
  nameElement.textContent = user.name;
  nameElement.classList.add('text-xl', 'font-bold', 'mb-2');
  userContainer.appendChild(nameElement);

  const usernameElement = document.createElement('p');
  usernameElement.textContent = `Username: ${user.username}`;
  usernameElement.classList.add('text-gray-600', 'mb-2');
  userContainer.appendChild(usernameElement);

  const emailElement = document.createElement('p');
  emailElement.textContent = `Email: ${user.email}`;
  emailElement.classList.add('text-gray-600', 'mb-2');
  userContainer.appendChild(emailElement);

  const addressElement = document.createElement('div');
  addressElement.classList.add('mb-4');

  const streetElement = document.createElement('p');
  streetElement.textContent = `Street: ${user.address.street}`;
  addressElement.appendChild(streetElement);

  const suiteElement = document.createElement('p');
  suiteElement.textContent = `Suite: ${user.address.suite}`;
  addressElement.appendChild(suiteElement);

  const cityElement = document.createElement('p');
  cityElement.textContent = `City: ${user.address.city}`;
  addressElement.appendChild(cityElement);

  const zipcodeElement = document.createElement('p');
  zipcodeElement.textContent = `Zipcode: ${user.address.zipcode}`;
  addressElement.appendChild(zipcodeElement);

  const geoElement = document.createElement('div');
  geoElement.classList.add('mb-4');

  const latElement = document.createElement('p');
  latElement.textContent = `Latitude: ${user.address.geo.lat}`;
  geoElement.appendChild(latElement);

  const lngElement = document.createElement('p');
  lngElement.textContent = `Longitude: ${user.address.geo.lng}`;
  geoElement.appendChild(lngElement);

  addressElement.appendChild(geoElement);
  userContainer.appendChild(addressElement);

  const phoneElement = document.createElement('p');
  phoneElement.textContent = `Phone: ${user.phone}`;
  phoneElement.classList.add('text-gray-600', 'mb-2');
  userContainer.appendChild(phoneElement);

  const websiteElement = document.createElement('p');
  websiteElement.textContent = `Website: ${user.website}`;
  websiteElement.classList.add('text-gray-600', 'mb-2');
  userContainer.appendChild(websiteElement);

  const companyElement = document.createElement('div');
  companyElement.classList.add('mb-4');

  const companyNameElement = document.createElement('p');
  companyNameElement.textContent = `Company: ${user.company.name}`;
  companyElement.appendChild(companyNameElement);

  const catchPhraseElement = document.createElement('p');
  catchPhraseElement.textContent = `Catch Phrase: ${user.company.catchPhrase}`;
  companyElement.appendChild(catchPhraseElement);

  const bsElement = document.createElement('p');
  bsElement.textContent = `Business Strategy: ${user.company.bs}`;
  companyElement.appendChild(bsElement);

  userContainer.appendChild(companyElement);

  return userContainer;
}


</script>