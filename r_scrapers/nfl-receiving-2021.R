#run in RStudio
library(rvest)
library(dplyr)

link = "https://www.pro-football-reference.com/years/2021/receiving.htm"
page = read_html(link)

name = page %>% html_nodes(".right+ .left a") %>% html_text()

team = page %>% html_nodes(".left+ td.left") %>% html_text()

#age detects unintended final element
age = page %>% html_nodes(".right:nth-child(4)") %>% html_text()
age = age[-length(age)] #removes unintended final element

games_played = page %>% html_nodes("td.right~ .left+ .right") %>% html_text()

targets = page %>% html_nodes(".right:nth-child(8)") %>% html_text()

receptions = page %>% html_nodes(".right:nth-child(9)") %>% html_text()

receiving_yards = page %>% html_nodes(".right:nth-child(11)") %>% html_text()

receiving_tds = page %>% html_nodes(".right:nth-child(13)") %>% html_text()

fumbles = page %>% html_nodes(".right:nth-child(19)") %>% html_text()

receiving_stats_2021 = data.frame(name, team, age, games_played, targets, 
                                  receptions, receiving_yards, receiving_tds,
                                  fumbles, stringsAsFactors = FALSE)

write.csv(receiving_stats_2021, "nfl-receiving-2021.csv")