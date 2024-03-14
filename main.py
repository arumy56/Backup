from taipy.gui import Gui

img_path="https://static.wixstatic.com/media/6f1822_0a00d3de2782474286924f63292bf12d~mv2.png/v1/fill/w_640,h_396,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/6f1822_0a00d3de2782474286924f63292bf12d~mv2.png"
value=""
newchat="welcome"
current_message=""
index= """

<|toggle|theme|>\n<center>\n<|navbar|>\n</center>
<|layout|columns = 400px 2 1|
<|text-size=100px|
###Previous Chats
|>


<|text-center|
#WELCOME TO CHAT CIVIL LAW 
 <|{img_path}|image|>
 
 Are you law student, and enthusiast about law, well you are in the right place <br/><br/>

 Ask anything Chat Civil Law and I will do my best to answer you <br/><br/>

 <|{value}|input|label=Write your question here..|on_action=send_message|class_name=fullwidth|>
# <|New Conversation|button|class-name=fullwidth plain|>



 |>
 |>
 
"""






app= Gui(page=index)

if __name__=="__main__":
    app.run(use_reloader=True, dark_mode=False)

    