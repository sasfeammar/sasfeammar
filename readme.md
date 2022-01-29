# UnRT, unretweet everything.
___
> UnRT is a php application that enables you to delete all your retweets on twitter at once.
It uses the simple [twitter API](https://developer.twitter.com) and [TwitterOAauth](https://twitteroauth.com/).
___

# Setup
### 1. Setting up your twitter application
> To use UnRT, you need a Twitter Application. To create one, visit [apps.twitter.com](https://apps.twitter.com/) and either log in with your twitter account or signup a new account.
 Once logged in, create a new app with read/write permissions and go in the "Keys and Access token" tab on your application management page.
 You will need to generate an access token this can be done at the bottom of the page.
 Save them or keep the browser open, you will need those later.
 
 ### 2. Downloading UnRT
 > Download UnRT from its [github repository](https://github.com/ataibi/UnRT)
 Set it up in a php supporting web server (I use [wampserver](http://wampserver.com) on windows, if you use linux I'm sure you know how to setup a php server)
 Once all of this is done, visit your webserver's page (e.g. http://localhost/UnRT).
 You should land on a setup page, fill it in accordingly, with the twitter application tokens previously mentionned, and your twitter screen name.

### 3. Enjoy your RT-free twitter ?
> You're all set, once the setup page completed, you will be redirected to a blank page with a button. Click it to remove all your RTs. This could take a while.

This is it ! 
Don't hesitate to [tweet me](https://twitter.com/Abderr_Taibi) if you need extra support.