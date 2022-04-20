# Coding-Assignment
Q1. Given a word composed of lowercase English letters, find the maximum possible score by building exactly 2 palindromic sub-sequences. The score obtained is the product of the length of these 2 sub-sequences.  What tests would you write to verify your program? 

for e.g.  If the word is  abcdefAnnaRacecarMom

the palindromes are Anna (4), Racecar (7), and  Mom (3). The maximum product is Anna - 4 , RaceCar - 7  = 4*7  = 28  

How would the program need to change if it needs to analyze a sentence instead of a word and produce a similar result?  e.g  'King, are you glad you are king'?

Q2. Encrypted Text:

An English text needs to be encrypted using the following encryption scheme. 

First, then spaces are removed from the text. Let be the length of this text. 
Then, characters are written into a grid, whose rows and columns have the following constraints:
sqareroot(length)<=row<=col<=sqareroot(length), where [x] is floor function, [x] is ceil function
For example, the sentence, after removing spaces is characters long.  is between and, so it is written in the form of a grid with 7 rows and 8 columns.

ifmanwas  
meanttos          
tayonthe  
groundgo  
dwouldha  
vegivenu  
sroots

Ensure that If multiple grids satisfy the above conditions, choose the one with the minimum area, i.e..

The encoded message is obtained by displaying the characters in a column, inserting a space, and then displaying the next column and inserting a space, and so on. For example, the encoded message for the above rectangle is:

imtgdvs fearwer mayoogo anouuio ntnnlvt wttddes aohghn sseoau

Another example 

Sample Input:
haveaniceday

Sample Output:
hae and via ecy

Explanation:
have
anic
eday
