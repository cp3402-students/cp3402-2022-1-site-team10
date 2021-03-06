# Townsville Jazz Club Website
Townsville Jazz Club uses automation and controls in places to maintain our codebase, manage changes and automate work where we found beneficial. We also leverage tools for effective communication.


# Communication
Throughout the development process, consistent communication and task tracking is key. Trello is used to track items through 4 Trello boards; Inbox, working on, done and ideas. The Trello boards have tasks created and moved around as new ideas are thought of, agreed on, worked on, then finally completed. 

Slack is used as a communication tool to quickly communicate with members but to also track changes happening within Github and Trello. Any changes within the Trello boards and Github are automatically communicated to the team through Slack. When longer discussions were required, Discord can be utilised for voice communication.

# Version Control
Townsville Jazz Club utilises Git, through Github to manage version control. There are 2 branches, Main and Staging. Staging is used for all in development aspects, such as modifying the website and preparing for a production release. The main branch is used for production and is our codebase used for the production website. We merge the staging branch with main when we are ready to deploy to production.

# Web hosting
GoDaddy was utilised as the hosting platform and is leveraged to automate the process where required. CPanel through GoDaddy can be used for manual intervention if/when required.

# Local development
Local development is leveraged through XAMPP to run a local Wordpress site. Local development is where any design changes are made and to understand how things should feel, flow and look. Once a concept is tried and tested, actual functionality is then done within the Staging site.

# Automation
To automate changes to our staging site, Deploybot was utilised. Deploybot constantly monitors Github through a webhook to detect commit changes. When a new commit is detected in the staging branch, Deploybot moves the files to the Staging site through SFTP. 

# Staging to Production
Moving staging to production isn???t optimised and requires manual work. To move from staging, you will need to utilise All-in-One WP Migration to export the staging site. After exporting, you will need to use All-in-One WP Migration to import the staging site onto the production site.
 

# Workflow diagram
The below diagram will illustrate how our communication interwines during the deploymnet process
![image](https://user-images.githubusercontent.com/53589460/169989153-4d0aa7e7-198d-4c51-ad81-a891196a2a7e.png)

