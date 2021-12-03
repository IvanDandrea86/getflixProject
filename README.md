# GetFlixProject - Welcome in our :sparkles: :sparkles: streaming plateform :sparkles: :sparkles: ! 


## What is GetFlix?
GetFlix is a streaming site inspired by platforms such as NetFlix, with a catalog of movies which the users can filter in the search bar. The site includes also a space to comment on the content. Administrators have access to a database to manage the comments.
</br>
<img src="https://pbs.twimg.com/media/Ebh9NaaWkAAkZPC.png" width="600" height="600" />


## Why GetFlix?
This project was build in the framework of our BeCode Web Development training. The main goal was to consolidate our PHP and MySQL skills, as well as our ability to communicate and work as a team.

## Creation process of GetFlix
We had 10 days to complete the task. 
Our first step was to think about the design and content of our future site. We did a lot of research on the internet to acquire enough knowledge to start. 

The second step was to think about the deployment of the website. It was mandatory to use docker, MyPHPAdmin and MariaDB. We took a moment to get familiar with those technologies by registering and creating a first database. 

We splitted the tasks between us as following:
+ **Ivan** was the project manager and he was in charge of both the back-end and front-end development;
+ **Sofian** was in charge of the front-end development part;
+ **Nicolas** was in charge of the back-end development part;
+ **Anne** was in charge of the back-end development part; 

We had daily meetings to monitor the development of the project, indentify difficulties or redefine tasks.


## Features of the website ... 
In the end of the project, we have been able to produce a website with the following features:

+ **A session system**: registration, connection/disconnection;
+ **Different rights**: to have the right to comment a film, you have to first be registered. If you are not yet registered, an message will appear to invite you to do it. 
+ **A search bar with filters**: where you can search different films categories.
+ **password system recuperation with token**: the token is sent to make the user confirms the password when he loose his password. 


## Challenges
1. **Creation and coordination of Github branches:**
We had all to create our own development branch and work on it. To facilitate the coordination, Ivan was our Git Master. His role was to validate all the commits to merge everything on the main development branch.

2. **To create a system of comments:**
We use the POST method. The user has to be registered to be able to post a comment. If not, the user receives an error message inviting him to register. 

3. **To make our code secure:**
We had to protect the data of our users. To make this possible we decided to add the hash functions of PHP, **password_hash()** and **validate_hash()**, in our code. For example, these hash functions are necessary to encrypt the code of the password users in the database. In this way, the privacy of all users is respected. Even for the website administrators it is not possible to see the secret information of the users that are stored in the database as it is encrypted.

4. **To deploy the website on Heroku:**
Heroku allows to deploy websites online. To achieve that, you have first to create a "webapp" on Heroku by creating your repository and adding your database on it. To be sure that we could add the MariaDB database without any difficulties we used the JawsDBMaria feature on Heroku.


## Somes pictures ...

![Our homepage](/application/source/media/homepage.PNG)

</br>

![The registration system](/application/source/media/registration.PNG)

</br>

![The profile information](/application/source/media/profile_information.PNG)

</br>

![The filters by film categories](/application/source/media/filter.PNG)

</br>

## We care about the responsivity.... :) 
As you can see here bellow, our website has been made **reponsive** and designed to fit any smartphones or tablettes. 

</br>
![](/application/source/media/responsive.PNG)


## Tools

+ HTML5  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="40" height="40"/>
</br>

+ Bootstrap <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" width="40" height="40" />
</br>

+ Javascript  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" height="40" />
</br>

+ PHP  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="60" height="60" />
</br>

+ Docker  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="40" height="40" />
</br>

+ Heroku  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/heroku/heroku-plain.svg" width="40" height="40" />
</br>


## Our dream team

The creation of this streaming plateform wouldn't have been possible without

+ The brillant Ivan Dandrea :frog:
+ The artful Sofian Mattheus :chicken:
+ The crafty Nicolas Valiascas :snail:
+ The cunning Anne Jungers :monkey_face:

</br>

![A picture of our 4 coding warriors](/application/source/media/dreamteam.jpg)


## Link to our site

[Come and visit our streaming website](https://getflixproject.herokuapp.com/)


## End word

We wish you a lot of fun visiting our Getflix plateform :movie_camera: :movie_camera: :movie_camera: !
Cheerio!!!!!

