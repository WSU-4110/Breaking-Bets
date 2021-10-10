#run in RStudio
library(rvest)
library(dplyr)

link = "https://www.pro-football-reference.com/years/2021/passing.htm"
page = read_html(link)

name = page %>% html_nodes(".right+ .left a") %>% html_text()

team = page %>% html_nodes(".left+ .left a") %>% html_text()

#age detects unintended final element
age = page %>% html_nodes(".right:nth-child(4)") %>% html_text()
age = age[-length(age)] #removes unintended final element

games_played = page %>% html_nodes("td.right~ .left+ .right") %>% html_text()

completions = page %>% html_nodes(".right:nth-child(9)") %>% html_text()

passing_attempts = page %>% html_nodes(".right:nth-child(10)") %>% html_text()

passing_yards = page %>% html_nodes(".right:nth-child(12)") %>% html_text()

passing_tds = page %>% html_nodes(".right:nth-child(13)") %>% html_text()

interceptions = page %>% html_nodes(".right:nth-child(15)") %>% html_text()

quarterback_rating = page %>% html_nodes(".right:nth-child(23)") %>% html_text()

passing_stats_2021 = data.frame(name, team, age, games_played, completions, 
                     passing_attempts, passing_yards, passing_tds, 
                     interceptions, quarterback_rating, 
                     stringsAsFactors = FALSE)

write.csv(passing_stats_2021, "nfl-passing-2021.csv")