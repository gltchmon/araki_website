# HIROHIKO ARAKI WEBSITE
This is a website that displays information about jjba author hirohiko araki with a shop feature that sells merch. This was a website made as my final assignment for my web development module. They main point was to design a website for an artist you liked while meeting the specified requirements (e.g., must be 5 pages long, must containing shop). This website was made with 5 user personas in mind each their own personal needs. Some users has visual impairments and others wanted to perform specific tasks. I had to consider all these personas when making my website so accommodate for people of many different backgrounds. Some ways I did this was by choosing specific easy to read fonts, keeping backgrounds simple with a colour that was not harsh on the eyes, having alt text on all my images in case people are using screen readers and more. 

## LESSONS LEARNED
From this project I have learned how to create  a website that interacts with a database and stores information. I learned how to use php to query the database and display information once a response was given. I learned about GET and POST requests and when its better to use one over the other for added security. I learned about maintaining website and database security by regulating user inputs and how certain data like passwords need to be stored. Lastly making this project has taught me how to listen and meet user requirements and accommodate for many different types of people. It made me aware of what certain people may need from my website and why some functionalities like auto scrolling may not be user friendly. 

# HOME

Demo video: https://mega.nz/file/fMZy0BbT#K5mDNbpfDqIxvcYX_ahN5EXQAmzMiAd-omx25kMUjwg

The code for the homepage can be seen on the index.php file. The homepage holds links to other pages on the website and acts as a summary of what can be seen on other pages e.g., featured items that lead to shop, profile information that takes user to the about page and other exhibition information that leads to the gallery. Its purpose is to show the core content that will be on the website and what this page has to offer. The featured items section displays new featured items every refresh. This data is pulled from the database using a select statement that selects items in the featured category:
<img width="1125" height="223" alt="image" src="https://github.com/user-attachments/assets/d7445813-d239-4eb2-8fbb-51e61988f470" />
There is also a carousel  to display more images of the artist.


# SHOP

Demo video: https://mega.nz/file/LJQxSDqb#WF5MXGiQnGftjfvyRKGjiYmy4dFhCbncMvNJcDUJ_Gk

On the shop page users can view items, add items to basket and leave reviews only if they are logged in. If users try to leave a review and they are not logged in they will be prompted to log in. The description images and names for each item is pulled from the database 
<img width="1115" height="541" alt="image" src="https://github.com/user-attachments/assets/1c55afd5-860f-4196-822d-3c853e1894de" />
Each product is also related to a specific category so that the items are not displayed all at once to the user. This helps the website look more organised, less cluttered and easier to find items. Since they are stored in the database with categories displaying them according to their item type is efficient. The reviews are also stored in the database so that the reviews remain even when the user is no longer logged in. Users cannot leave more than one review for each item. The reviews database uses foreign keys from the product and user tables to ensure the correct users and product are linked to each review. 
<img width="615" height="749" alt="image" src="https://github.com/user-attachments/assets/3cd85a9f-4fbb-4ae1-af72-a5b9c67a0864" />


# GALLERY

Demo video: https://mega.nz/file/KUZAFLhY#_QCZOgwLbsJS7ic4oeRFMvJHdKPuLZ0YPvUmi-PF9xs

The gallery is a simple page to show some of the art by the artist. I found that keeping it simple helped keep the focus on the art so that they could easily see the artworks displayed. 

# ABOUT

Demo: https://mega.nz/file/uIx3VbaS#gENeMo2wdHwAMSXpAPwhlff64eqVl6TpweV9-LHldbM

The about page displays information about the artist such as his background, history and information on his most notable works. The most important thing about this page was maintaining readability as it will be a text heavy page so I made sure to include white space when making the design of the page. This also motivated me to make the page background a slight off white so that it was less harsh on users when they read the texts. A sans serif font also helped with readability as it is a popular font to use amongst news articles and pages where large amount of information is displayed. 

# SIGN UP

Demo: https://mega.nz/file/WR5BzY4L#6sPEwzoADOdhE0IGb7cTKgwEgoRK3Nv3r9nO5uFn1wk

Users are able to register and log in to their accounts which can change certain parts if they are logged in e.g., add a review. To register the user must meet the requirements specified on the form otherwise they will see a message that tells them an error has occurred. 
<img width="1278" height="662" alt="image" src="https://github.com/user-attachments/assets/840570f6-beea-4c0b-ac7b-8536ea7d2e0c" />
This helps to validating the data before inserting a new user into the database. Other ways the data is validated is through email and html validation. Passwords are hashed before being stored into the database. 
<img width="1097" height="751" alt="image" src="https://github.com/user-attachments/assets/5b49c72e-1bcc-484a-ba1c-d9a9b49a7df0" />

# BASKET

Before users can checkout they must be logged in. Each delivery option changes the final price. Quantity changes also affect the price when updated. Every time the user adds something to their basket they are taken to the basket and then they can go back. 

<img width="1913" height="852" alt="image" src="https://github.com/user-attachments/assets/fe8e6221-d57e-472f-b193-0f8b1c886a02" />







