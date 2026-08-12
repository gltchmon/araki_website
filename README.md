# araki_website
website made dedicated to jjba author hirohiko araki with a shop feature

#HOME

Demo video: https://mega.nz/file/fMZy0BbT#K5mDNbpfDqIxvcYX_ahN5EXQAmzMiAd-omx25kMUjwg

The code for the homepage can be seen on the index.php file. The homepage holds links to other pages on the website and acts as a summary of what can be seen on other pages e.g., featured items that lead to shop, profile information that takes user to the about page and other exhibition information that leads to the gallery. The featured items section displays new featured items every refresh. This data is pulled from the database using a select statement that selects items in the featured category:
<img width="1125" height="223" alt="image" src="https://github.com/user-attachments/assets/d7445813-d239-4eb2-8fbb-51e61988f470" />
There is also a carousel  to display more images of the artist.

# SHOP

Demo video: https://mega.nz/file/LJQxSDqb#WF5MXGiQnGftjfvyRKGjiYmy4dFhCbncMvNJcDUJ_Gk
On the shop page users can view items, add items to basket and leave reviews only if they are logged in. If users try to leave a review and they are not logged in they will be prompted to log in. The description images and names for each item is pulled from the database 
<img width="1115" height="541" alt="image" src="https://github.com/user-attachments/assets/1c55afd5-860f-4196-822d-3c853e1894de" />
Each product is also related to a specific category so that the items are not displayed all at once to the user. This helps the website look more organised, less cluttered and easier to find items. The reviews are also stored in the database so that the reviews remain even when the user is no longer logged in. Users cannot leave more than one review for each item. The reviews database uses foreign keys from the product and user tables to ensure the correct users and product are linked to each review. 
<img width="615" height="749" alt="image" src="https://github.com/user-attachments/assets/3cd85a9f-4fbb-4ae1-af72-a5b9c67a0864" />
