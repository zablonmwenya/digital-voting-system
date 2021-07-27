# SRS FOR DIGITAL VOTING SYSTEM

- [SRS FOR DIGITAL VOTING SYSTEM](#srs-for-digital-voting-system)
  - [INTRODUCTION](#introduction)
  - [PROBLEM STATEMENT](#problem-statement)
  - [OBJECTIVES](#objectives)
  - [User of the system](#user-of-the-system)
  - [Fuctional Requirements](#fuctional-requirements)

## INTRODUCTION

“DIGITAL VOTING SYSTEM” is a digital voting technique. In this system people who have citizenship of the country and whose age is above 18 years of age and any sex can give his or her vote digitally without using ballot paper in polling station. There is a database which is maintained in which all names of voters with complete information is stored. In digital voting system, a voter can use his or her voting rights digital without any difficulty. He\she has to be registered first for him to vote. Registration is mainly done by the system administration for security reasons. Citizens seeking registration are expected to visit the electoral body office to submit their details. After the validity of them being citizen of that specific country has been confirmed by the system administrator by comparing their details submitted with those in existing database such as those at the registrar of people, the citizen is then registered as voter. After registration, the voter gets a card containing details which he/she will use to log in the system during election period. If invalid/wrong details are submitted by the citizen during registration then he/she wouldn’t be registered as a voter.

## PROBLEM STATEMENT

Paper ballot voting system brings with it a number of problems such as the slow rate of counting and tabulation of casted vote, the process of counting being handled manually may lead to inaccurate result due to human error, poor presentation of the ballot papers, inconvenience for the voter who is required to queue and vote at the polling station, poor participation and turnout, fraud in polling station and during the transmission and tabulation of result, increase in spoilt ballot papers and increase in the long-term cost of production and distribution of ballot papers. 

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
4. Feedback /Contuct us page
   - Provides form for voters to contuct the admin or sent in their feedback about the system
   ![image](https://user-images.githubusercontent.com/72855022/127014862-0c47f8a8-9c57-47de-95b2-eac73ab4b2f4.png)

   
Database Design
   Admins Table
   
  | Field name   | Data Type          | Length |
  |--------------|--------------------|--------|
  | id           |bigint unsigned(PK) | 20     |
  |admin_username|tinytext            |256     |
  |admin_password|tinytext            |256     |
  |time_stamp    |datetime            |1       |
   
   Voters Table
   
  | Field name   | Data Type          | Length |
  |--------------|--------------------|--------|
  | id           |bigint unsigned(PK) | 20     |
  |full_name     |tinytext            |256     |
  |voter_id      |int                 |10      |
  |voter_password|tinytext            | 256    |
  |voter_gender  |tinytext            |256     |
  
   Votes Table
   
  |Field name             | Data Type          | Length |
  |-----------------------|--------------------|--------|
  | id                    |bigint unsigned(PK) | 20     |
  |voted_for_president    |tinytext            |256     |
  |voted_for_primeminister|tinytext            |256     |
  |voted_for_governor     |tinytext            | 256    |
  |voted_for_senetor      |tinytext            |256     |
  |voted_for_mp           |tinytext            |256     |
  
   Feedback Table
   
  |Field name  | Data Type          | Length |
  |------------|--------------------|--------|
  | id         |bigint unsigned(PK) | 20     |
  |name        |tinytext            |256     |
  |	email      |tinytext            |256     |
  |phone       |int                 | 10     |
  |	feedback   |tinytext            |256     |
  |suggestions |tinytext            |256     |
  
   
   
   
