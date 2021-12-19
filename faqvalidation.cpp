//Test for unused feedback section intended for FAQ page
//C++
//xUnit

#include <iostream>
#include <stdio.h>
#include <string.h>
using namespace std;

//tests to see if characters are used in user's question
bool feedback(string input){
    if(input == ""){
    return false;
}
    else{
    return true;
}
}
//tests user ability to categorize the topic of their question
void category(string input){
    cout<<"Please categorize the topic of your question"<<endl;
    cin>>input;
}

//tests length of user input
void characterlength(string input){

    if((input.length())<150){
    cout<<"Thank you for your input!"<<endl;
    }
    else{
    cout<<"Please shorten your input to less than 150 characters"<<endl;
}
    
}


//tests validity of user's chosen categorization
void categorychecker(string input){
    if(input=="Design"||input=="Critique"||input=="Improvement"){
        cout<<"Thank you";
}
    else{
        cout<<"Our three areas of feedback are Improvement, Critique, and Design";
}
}

//tests for user contact information

void contactinfo(string input){
    cout<<"Please feel free to leave an email below and we will gladly contact you in due time"<<endl;
    cin>>input;
}

//tests for validity of user provided email
void emailcheck(string input){
    if(isalpha(input.at(0))>0){
        cout<<"Thank you.";
    }
    else{
        cout<<"This is not a valid email"<<endl;
    }
       
       }


int main(){
    string test;
    string test2;
    feedback(test);
    cout<<endl;
    category(test);
    cout<<endl;
    characterlength(test);
    cout<<endl;
    categorychecker(test);
    cout<<endl;
    contactinfo(test2);
    cout<<endl;
    emailcheck(test2);
    cout<<endl;
}
