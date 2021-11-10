"""
Software Design Pattern: Iterator

This python program is meant to be a simple representation of the type of data
that is stored in our database, and how we can retrieve it.
We are using php and sql to work with the database, this example uses
python to make the demonstration simple.

Our database has a table for teams(names and an id #), a players table (has a player id, links to their team id #),
tables for different categories of playing stats. We can query these tables and output returned
information either in table format or word format.


This program displays 3 tables:
    1) A table of players that attended college at Michigan or Ohio State
    2) A table of players that are quarterbacks and are either under the age of 25 or over the age of 33
    3) The user is asked to pick 1 of 32 teams whose roster they want to view. The user can view the roster
        in a shortened form, less columns, or a full form.

"""


from prettytable import PrettyTable#Used to output info into table form


class Teams:
    def _init_(self, n=" "):
        self.teamName = n

    #Display QB's w/ age under 25 or age over 33
    def inBuilt_Iterator(self,teamFiles):
        myTable = PrettyTable(['Age','Name','Team', 'Pos.', 'NFL Exp.'])#Set table columns
        for i in teamFiles:#Loop through each team file
            x = i + 1
            if x <= 32:
                self.teamName = teamFiles.get(x)
                fileName = self.teamName + ".txt"
                inFile = open(fileName, "r")
                lines = inFile.readlines()
                for line in lines:
                    if line[-1:] != '\n':#If player name is found in last row of file, add newline \n to end of line
                        line = line + '\n'
                    a = line.split('\t')
                    if a[2] == 'QB' and (int(a[4]) < 25 or int(a[4]) > 33):
                        myTable.add_row([a[4],a[1],self.teamName,a[2],a[10]])
            inFile.close()
        #Sort table by age, ascending, and display table with a title
        myTable.sortby = "Age"
        print(myTable.get_string(title="QB's Age < 25 or Age > 33)"))

    #Display players that attended college at Michigan or Ohio State
    def inBuilt_Iterator2(self,teamFiles):
        myTable = PrettyTable(['Name','Team', 'Pos.', 'Age', 'College','Draft Status', 'NFL Exp.'])#Set table columns
        for i in teamFiles:#Loop through each team file
            x = i + 1
            if x <= 32:
                self.teamName = teamFiles.get(x)
                fileName = self.teamName + ".txt"
                inFile = open(fileName, "r")
                lines = inFile.readlines()
                for line in lines:
                    if line[-1:] != '\n':#If player name is found in last row of file, add newline \n to end of line
                        line = line + '\n'
                    a = line.split('\t')
                    if a[7] == 'Michigan' or a[7] == 'Ohio State':
                        myTable.add_row([a[1],self.teamName,a[2],a[4],a[7],a[9],a[10]])
            inFile.close()
        #Sort table by age, descending, and display with a title
        myTable.sortby = "Age"
        myTable.reversesort = True
        print(myTable.get_string(title="Players That Attended Michigan or Ohio State"))

    #Function opens file of users choice, displays roster how they want it
    def inBuilt_Iterator3(self,teamFiles):
        
        #Display list of team names for user to choose from. Validate input
        print("List of team rosters available")
        for x,y in teamFiles.items():
            print(x, y)
        userInput = int(input("Pick one of the above numbers to display matching roster: "))

        while userInput < 1 or userInput > 32:
            userInput = int(input("You entered an invalid number, pick a number between 1 and 32: "))
        self.teamName = teamFiles.get(userInput)

        #Ask user if they wanted a shortened roster/player listing or a full one. Validate input
        choice = int(input("\nEnter 1 for Short Listing for players, 2 for Full Listing: "))
        while choice < 1 or choice > 2:
            choice = int(input("You entered an invalid option, enter 1 for Short Listing or 2 for Full Listing: "))

        
        #Open file, create a list and dictionary which will hold files shortened contents if desired
        fileName = str(self.teamName) + ".txt"
        inFile = open(fileName, "r")
        lines = inFile.readlines()
        i = 0
        L = []
        D = {}

        #Output table
        print("\n\t",self.teamName + " Roster\n")
        if choice == 1:#Short format
            myTable = PrettyTable(['Num.', 'Name', 'Pos.'])#Set table columns
            for line in lines:
                a = line.split("\t")
                D[a[0]] = a[2]
                L.append(a[1])
                i = i + 1
            
            i = 0
            for x,y in D.items():
                myTable.add_row([x,L[i],y])
                i = i + 1
            print(myTable)
        else:#Long format
            myTable = PrettyTable(['Num.', 'Name', 'Pos.', 'DOB', 'Age', 'HT', 'WT', 'College', 'Orig. Team', 'Draft Status', 'NFL Exp.'])#Set table columns
            for line in lines:
                a = line.split("\t")
                myTable.add_row([a[0],a[1],a[2],a[3],a[4],a[5],a[6],a[7],a[8],a[9],a[10]])
            print(myTable)
        inFile.close()

    
#Main
if __name__ == "__main__" :
    
    #Dictionary to hold team names in alphabetical order
    teamFiles = {1:'49ers',2:'Bears',3:'Bengals',4:'Bills',5:'Broncos',6:'Browns',7:'Buccaneers',8:'Cardinals',9:'Chargers',10:'Chiefs'
                 ,11:'Colts',12:'Cowboys',13:'Dolphins',14:'Eagles',15:'Falcons',16:'Football Team',17:'Giants',18:'Jaguars',19:'Jets',
                 20:'Lions',21:'Packers',22:'Panthers',23:'Patriots',24:'Raiders',25:'Rams',26:'Ravens',27:'Saints',28:'Seahawks',29:'Steelers',30:'Texans',31:'Titans',32:'Vikings'}
    
    #Create class object, call iterator methods
    team1= Teams()
    
    team1.inBuilt_Iterator(teamFiles)
    team1.inBuilt_Iterator2(teamFiles)
    team1.inBuilt_Iterator3(teamFiles)
