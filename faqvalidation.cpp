//Test for unused feedback section intended for FAQ page
//C++
//xUnit

#include <iostream>
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
void categoory(string input){
    cout<<"Please categorize the topic of your question"<<endl;
    cin>>input;
}

//tests length of user input
void characterlength(string input){

    if(strlen(input))<150){
    cout<<"Thank you for your input!"<<endl;
    }
    else{
    cout<<"Please shorten your input to less than 150 characters"<<endl;
}
    
}


//tests validity of user's chosen categorization
bool categorychecker(string input){
    if(input=="Design"){
    return true;
}
    else if(input=="Improvement"){
    return true;
}
    else if(input=="Critique"){
    return true;
    }
    else if(input!="Critique"||input!="Improvement"||input!="Design"){
    cout<<"Our three areas of feedback are Improvement, Critique, and Design"<<endl;
        categorychecker(input);
}
    else{
    return false;
}
}

//tests for user contact information

void contactinfo(string input){
    cout<<"Please feel free to leave an email below and we will gladly contact you in due time"<<endl;
    cin>>input;
}

//tests for validity of user provided email
bool emailcheck(string input){
    if(isalpha(input.at(0))==true){
    return true;
    }
    
    else{
    cout<<"This is not a valid email"<<endl;
        return false;
    }
       
       }
