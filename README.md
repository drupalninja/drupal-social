## Overview
This sample Drupal project installs a standard Drupal site that
configures user profile pages to act like user timelines
(similar to Twitter and other social media applications).

Read full tutorial:
https://medium.com/@jrcallicott/create-a-twitter-style-application-in-drupal-8207e4aaef96

## Key Features
- User timeline with short posts
- User mentions
- Threads
- Likes
- Follow user posts
- Drush command for creating test users
- Easy to customize

## Quick start

1. **Create a new Drupal project with this template**

   ```shell
   composer create-project 'drupalninja/drupal-social:1.x-dev' projectname
   ```

2. **Enable ddev (optional)**

   ```shell
   ddev start
   ```
3. **Install Drupal (standard)**

   ```shell
   ddev . drush si -y
   ```

4. **Enable social feature**

   ```shell
   ddev . drush en -y social
   ```

5. **Create test users with comments**

   ```shell
   ddev . drush sdu
   ```

## Customizing
- Views: liked_posts and posts_timeline can be customized
- "Posts" comment type can be customized
