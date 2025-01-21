# Music-Store
This is one of my first projects: a website for managing an online music store. It dynamically retrieves all the data from a database, ensuring an interactive and up-to-date user experience. The project was built using PHP, HTML, CSS, and SQL, allowing me to develop essential programming skills. Created during my high school years, this project was a great learning experience that helped me understand web development, database management, and the integration of front-end and back-end technologies.

Problem Statement: 
The goal was to create an online store with the theme “Musical Minds,” which would allow an administrator to make changes to the product database, while also enabling users to view products and add them to a shopping cart.

Specification of Requirements for "Musical Minds": 
The online application "Musical Minds" is designed to cater to music enthusiasts by offering a user-friendly and functional e-commerce platform. The website focuses on both aesthetics and utility, ensuring smooth navigation and accessibility to information. Below are the key functionalities for users and administrators:
User Features
View products categorized by type (e.g., instruments, accessories, etc.).
Create a user account for personalized experiences.
Access detailed information about the best-selling product and discounted items.
View contact information for customer support.
Update account details such as name, email, and password.
Contact site administrators directly through a dedicated feature.
If logged in, add or remove products from the shopping cart for easy checkout.
Administrator Features
Add new products to the database, organized by category.
Remove existing products from the database as needed.
The design emphasizes simplicity and clarity, avoiding unnecessary complexity to ensure a seamless user experience. The site also prioritizes quick access to essential features like product browsing, account management, and customer support. By integrating these functionalities, "Musical Minds" aims to provide a comprehensive platform for music lovers while enabling efficient management for administrators.

User Guide:
The online store "Musical Minds" is centered around databases, with the entire website being generated based on data extracted from the database.
On the homepage, users can view product categories, the best-selling products, and discounted products.

![image](https://github.com/user-attachments/assets/7abab036-f68c-416f-b552-de2ee8403e9d)

The navigation bar consists of individual buttons for each product category:
On the Guitar/Bass page, all products belonging to this category are retrieved from the database.
Similarly, this applies to the other pages as well.

![image](https://github.com/user-attachments/assets/a9226efe-3d64-4421-a28d-b4af169ff4e5)

In the header section, we have:

![image](https://github.com/user-attachments/assets/23698972-2a63-4176-9b25-8edbaf357b24)

The "Home" button, when clicked, will redirect you to the main page. If the user is logged in, they will be redirected to the logged-in main page, and if they are not logged in, they will be redirected to the non-logged-in main page.

The "Contact Us" button, when clicked, will redirect you to the Contact Us page.

![image](https://github.com/user-attachments/assets/92b77162-455a-421b-94e4-ce21e5804116)

The "About Us" button, when clicked, will redirect you to the About Us page.

In the center of the header, there is the site logo which, when clicked, redirects users to the main page. If the user is logged in, they are redirected to the logged-in homepage; if not, they are redirected to the non-logged-in homepage.
Below the logo is a search bar that allows users to easily find products on the site. It queries the product table in the database and displays all matching products on a new page.

In the right section of the header, there are three icons:
The first icon has two functionalities:
If the user is not logged in, clicking it redirects them to the login page.
If the user is logged in, the icon changes its color to green and redirects to the user's profile page. On this page, the user is greeted with a welcome message: "Welcome, [username]", where the username is automatically updated based on the logged-in user's details.

![image](https://github.com/user-attachments/assets/e01a997b-2bf6-436e-8f3e-2d1aaf8814b9)

On the user's page, there are three buttons. One of them is the "Account Overview" button, which redirects the user to a page where their logged-in information is dynamically retrieved from the database and displayed.

![image](https://github.com/user-attachments/assets/264df760-8eb0-494f-bc82-0ae2fdc20ed9)

The "Edit Account" button redirects the user to a page where they can modify their account information. Any changes made by the user are reflected in the database, ensuring that their updated details are saved and synchronized properly. This feature allows users to update fields such as their name, email, or password, providing a seamless and efficient way to manage personal data.

![image](https://github.com/user-attachments/assets/62513e19-1d39-44ec-97fa-cf5062ae5a63)

The "My Orders" button redirects the user to a page where their site orders are displayed. However, this functionality is currently not operational.

The second icon represents the page for each user's favorite products. However, this feature is currently not functional.
The third icon represents the shopping cart, where users can add their desired products. This icon dynamically updates based on the user by retrieving information from the database, ensuring that it reflects the specific items added to their cart.

The login page includes two text fields where users can enter their account details (username and password). These inputs are validated by querying the database to confirm the user's existence, enabling successful login.
If the user does not have an account, they need to click the "Register" button, which redirects them to the registration page to create a new account.

![image](https://github.com/user-attachments/assets/6b563638-69ba-4c90-b063-39f2c7ce9b0d)

On the registration page, the user enters the account details they wish to create. These details are then securely stored in the database, ensuring that the new account is successfully added to the system.

![image](https://github.com/user-attachments/assets/1dacce06-e03d-42f3-9c68-e7f086a8484f)

On the page below, all products from a specific category are retrieved from the database and displayed, showing their names and images.

![image](https://github.com/user-attachments/assets/d30423c4-48d6-4a59-981e-2cee034beb42)

![image](https://github.com/user-attachments/assets/e758be86-79a7-44fd-a1e6-2ba987b381ec)

The name, price, brand, stock, description, and image of products are dynamically retrieved from the database and displayed on the product page. Users can only add products to the shopping cart if they are logged in and the product is in stock.
When the "Add to Cart" button is clicked at the bottom of the product page:
The product is added to both the shopping cart and the database.
To view the cart's contents, users must click the cart icon in the header, which redirects them to the shopping cart page.
This ensures a seamless shopping experience while maintaining accurate inventory tracking.

![image](https://github.com/user-attachments/assets/cf11a74e-b40a-4943-9e9d-eb5dfa4c31b6)

The products added to the shopping cart are displayed one below the other. When the "Add to Cart" button is clicked on a product page, the product ID and the selected quantity are retrieved. On the shopping cart page, the product name and price are displayed based on the product ID and the selected quantity provided during the addition process.
The "Remove" button allows users to delete items from both the shopping cart and the database, ensuring that the cart and database remain synchronized. This functionality provides users with an efficient way to manage their cart contents.

The administrator is unique and has a predefined email and password that come with the site: email: admin@admin.com and password: root. Once logged in as the administrator, a button labeled "Actions" will appear in the header. This button provides access to administrative functionalities.

![image](https://github.com/user-attachments/assets/a137f27b-1798-4c69-be64-9cadce9b4d6c)

On each page, the system checks if the user is logged in as an administrator. If so, the "Actions" button is inserted into the header; otherwise, the header remains unchanged. When the "Actions" button is clicked, the administrator is redirected to a specific page for administrative tasks.

As an administrator, you have the ability to insert new products and delete existing products. To delete a product, the administrator must input its ID from the database. Once the ID is provided, the product is removed from the corresponding table in the database. This functionality ensures efficient management of the product inventory.

![image](https://github.com/user-attachments/assets/0ff2521e-6a1f-448b-8285-3d05744b8e6b)

In conclusion, developing this application helped me improve my teamwork skills, fostered a passion for web programming, and opened the path toward a future career as a web developer, particularly in working with databases and the PHP language.
The web application features a minimalist design focused on functionality, allowing music enthusiasts easy access to the products in our store.







