# To-Do List
# Things to do

### General
* Almost all of this code is actually really badly done. Refactor and fix everything up, get rid of file clunk. Probably a summer project.

### Content
* index: fill out sarick's quote and bio
* club_about: pictures on right-hand column
* club_schedule: add all content and make calendar work
* club_resources: formalize resources
* vex_about: fill out content and pictures
* vex_resources: fill out content and pictures
* horizons_curriculum: fill out content and pictures
* projects_arduino: fill out content and pictures
* projects_keyboard: fill out content and pictures
* projects_soldering: fill out content and pictures
* user_home: implement attendance, "game", and messagesfeatures
* user_admin: implement attendance, "game", and messages features
* user_account: implement more account editing features

### User Account
* Accounts let you edit your name, etc.
* Account system is tied in with attendance (still has codes)
* Graphs for accounts, including admin access, account access, and special teacher access
* Accounts feature points (badges for cumulative points, ribbons for streaks)
* Accounts have an admin level, and admins can edit the attendance code
* Messaging System (for now, just admins can send messages/alerts/bulletins)

## Bulletin
* At User Homepage/Index
* Admins can submit bulletin announcements (with new JSON set)
* (Possible) on bulletin unread, pop a notification

## Alerts
* Admins can submit site wide alerts
* Admins can also remove site wide alerts
* Submitted Alerts are displayed

## Messages
* User Homepage
* Admins (and eventually users) can send messages to each other
* Senders will fill out a modal to send a message to a specific user (probably by email)
* Recipients will get a new notification and can read the Messages
* On message read, remove notification and mark as read.
* Messages can also be deleted.

### Attendance
* Pull Attendance data and parse it!
* Users can see a display of what days they come in (to graph)
* Users get badges for attending (badges for cumulative, ribbons for streaks, medals/trophies for special events)
* Possible leaderboard

### Achievements and Ribbons
* Achievements are earned through reaching a milestone (listed in Achievements.md)
* Ribbons are earned through streaks (listed in Ribbons.md)
* Achievements and Ribbons have their own tab on the User Homepage
* User Admin page can give users Achievements and Ribbons
* Attendance Achievements are calculated off of attendance; everything else is admin-assigned

# People to do them

## Matthew Wang
* Implement all the content and pages.
* Code cleanup!
* Bulletin submit
* Work on UI for pages
* Create front-end for Achievements/Ribbons

## Jack Sarick
* Implement messaging/alert
* Implement database
* Implement gamification of attendance
* Formalize the resources items.
* Fill out quote/bio

## Nick O'Brien
* Create a multi-month calendar on [club_calendar.php](club_calendar.php), using pagination

## Camran Hansen
* Fill out information in the Horizons Curriculum tab [horizons_curriculum.php](horizons_curriculum.php)

## John Mace
* Add pictures
* Work On Achievements Pictures

## Tyler Tam
* Work on Achievements Pictures

## Simon Guo
* Add Descriptions for [Arduino page](projects_arduino.php).
