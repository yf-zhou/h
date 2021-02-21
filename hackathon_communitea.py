"""hackathon communitea functions"""
from typing import List, Tuple, Dict, TextIO

popup_msg = 'Incorrect username or password. Please try again, or sign up.'
user_list = {}
cups_of_types = {}
English_breakfast = {}

# def sign_up


def welcome_page(username: str, password: str) -> None:
    """ Admit users with existing usernames and correct passwords.
    
    >>> welcome_page('guest-user', 'password')
    
    >>> welcome_page('user--', 'psw---')
    'Incorrect username or password. Please try again, or sign up.'
    """
    
    if user_list[username] == passcode:
        return int #use that int to enact the user homepage later
    else:
        return popup_msg
    

def tea_log(tea_type: str) -> None:
    """ Keep track of how many cups of each type of tea a user has had.
    
    >>> tea_log('TWINING Chai')
    
    >>> tea_log('TWINING English breakfast')
    """
   
    if tea_type in cups_of_types:
        cups_of_types[tea_type] += 1
    else:
        cups_of_types[tea_type] = 1
        

def review_tea (tea_cate: dict, username: str, stars: int) -> None:
    """ Add a user's review to a dictionary that represents a category of tea.
    
    >>> English_breakfast
    {'user01': 3, 'user08': 4}
    >>> review_tea(English_breakfast, 'guest-user', 4)
    >>> English_breakfast
    {'user01': 3, 'user08': 4, 'guest-user': 4}
    """
    
    tea_cate[username] = stars