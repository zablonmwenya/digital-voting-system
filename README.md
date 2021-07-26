# SRS FOR DIGITAL VOTING SYSTEM

- [SRS FOR DIGITAL VOTING SYSTEM](#srs-for-digital-voting-system)
  - [INTRODUCTION](#introduction)
  - [PROBLEM STATEMENT](#problem-statement)
  - [OBJECTIVES](#objectives)
  - [User of the system](#user-of-the-system)
  - [Fuctional Requirements](#fuctional-requirements)

## INTRODUCTION

"DIGITAL VOTING sYSTEM" is a digital voting technique. In this system people who have citizenship of the country and whos age is above 18 years of age and any sec can give his\her vote digitaly without using ballot paper in polling stations.
There is a database which is maintained in which all the names of voters whith complete information is stored.
In "DIGITAL VOTING sYSTEM" a voter can use his\her voting rights digital without any defficulty. He\She has to be registered first for him/her to vote. Registration is mainly done by the system administratio for security reasons. THe system administrator registers the voters on a special site of the system visited by him only by simply filling a registration form to regidter voter. Citizens seeking redistration are epected to visit the electral body office or contact the system administrator to submit their details. After the validity of them being citizen of that specific country has been confirmed by the system administrator by comparing their details submited with those in existing database such as those as the registrar of persons, the citizen is then registered as a voter.
After registration, the voter is assigned a secret VoterID with which he/she can use to log into the system during election period and enjoy services provides by the system such as voting. If invalid/wrong details are submitted, then the citizen is not registered to vote.

## PROBLEM STATEMENT

Voting information handled manually poses a number of challenges such as; during election time after voting, you can’t make any changes even if you voted for a wrong candidate that you never wanted. The use of paper work in handling some of these processes could lead to human error which cannot be corrected once doe it's over and it is also time consuming.

The said problems can be solved by creating and designing a digital voting system which will allow the voter to make any changes before submitting and it’s faster.

## OBJECTIVES

- Main objective
  1. Provision of improved voting service to the voters through fasr, timely and convenient voting.
  2. Reduction of cost incurred by the Electrol Commission during voting time in paying the very many clerks employed for the sake of the success of the manual system.
  3. Check to ensure that the members who are registered are the oly one to vote. Cases of "Dead People" voting are also minimized.
  4. Digital voting system will require being very precise or cost cutting to produce an effective election management system.

- Specific objectives
  1. Reviewing the existing/ current voting process or approach in the country.

  2. Coming up with an automated voting system.

  3. Implementing an automated/ digital voting system.

  4. Validating the system to ensure that only legible voters are allowed to vote.
  
## User of the system

 1. Voters - This user will be able to lading page of the system as well as be able to vote for the candidates for each possition.

 2. System Admin - This user will be able to register the voters as well as check the votes being casted.

## Fuctional Requirements

Tee system will have modules, which are user friendly that will enhance user experience. The modules are:

1. Admin Sign in
   - Provides the user with the option to sign in. This is for the administrator only.
  ![Screenshot (17)](https://user-images.githubusercontent.com/72855022/126981872-c1897b6e-bc4b-4b76-b800-1c46f5fddde2.png)
2. Voter sign in
   - Provides the voter with the option to sign in. This is for the voter only.
  ![Screenshot (18)](https://user-images.githubusercontent.com/72855022/126981946-8ce66b51-6a9a-4d24-865d-c65fad06c24d.png)
3. Voting page
   - Provides the voter with the form with contestant detail for each position.![Screenshot (21)](https://user-images.githubusercontent.com/72855022/126982133-018f76c8-6ab6-4f31-bfe2-b3a8c0e77a89.png)
4. Feedback panel
   - Provides feedback information from voters,
   ![Screenshot (19)](https://user-images.githubusercontent.com/72855022/126982279-94ebb740-ba64-40d0-955f-fe7c381b3ae9.png)
   
   ##Database Design
   ###Admins Table
  | Field name   | Data Type          | Length |
  |--------------|--------------------|--------|
  | id           |bigint unsigned(PK) | 20     |
  |--------------|--------------------|--------|
  |admin_username|tinytext            |256     |
  |--------------|--------------------|--------|
  |admin_password|tinytext            |256     |
  |--------------|--------------------|--------|
  |time_stamp    |datetime            |1       |
  |--------------|--------------------|--------|
   
   ###Voters Table
   
  | Field name   | Data Type          | Length |
  |--------------|--------------------|--------|
  | id           |bigint unsigned(PK) | 20     |
  |--------------|--------------------|--------|
  |full_name     |tinytext            |256     |
  |--------------|--------------------|--------|
  |voter_id      |int                 |10      |
  |--------------|--------------------|--------|
  |voter_password|tinytext            | 256    |
  |--------------|--------------------|--------|
  |voter_gender  |tinytext            |256     |
  |--------------|--------------------|--------|
  
   ###Votes Table
   
  |Field name             | Data Type          | Length |
  |-----------------------|--------------------|--------|
  | id                    |bigint unsigned(PK) | 20     |
  |-----------------------|--------------------|--------|
  |voted_for_president    |tinytext            |256     |
  |-----------------------|--------------------|--------|
  |voted_for_primeminister|tinytext            |256     |
  |-----------------------|--------------------|--------|
  |voted_for_governor     |tinytext            | 256    |
  |-----------------------|--------------------|--------|
  |voted_for_senetor      |tinytext            |256     |
  |-----------------------|--------------------|--------|
  |voted_for_mp           |tinytext            |256     |
  |-----------------------|--------------------|--------|
  
   ###Feedback Table
   
  |Field name  | Data Type          | Length |
  |------------|--------------------|--------|
  | id         |bigint unsigned(PK) | 20     |
  |name        |tinytext            |256     |
  |	email      |tinytext            |256     |
  |phone       |int                 | 10     |
  |	feedback   |tinytext            |256     |
  |suggestions |tinytext            |256     |
  
   
   
   
