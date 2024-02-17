from selenium import webdriver
from selenium.webdriver.common.keys import Keys

# Ruta al archivo con los datos
archivo_datos = 'datos.txt'

# Lee los datos desde el archivo
with open(archivo_datos, 'r') as file:
    dato = file.read().strip()

# Inicializa el driver del navegador (Firefox)
driver = webdriver.Firefox()

# Abre el navegador y navega a la página deseada
driver.get("https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fwww.google.com.ar%2F&ec=GAZAmgQ&hl=es-419&ifkv=ASKXGp3VTsemB0w7fllaTOjOfXBNthYSW_jBUrQUhYY310BnolX3rO1VyCueexZ2YXbJZP6cnqzyaQ&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1357963073%3A1706308419396154&theme=glif")

# Encuentra el elemento de entrada y escribe el dato
input_element = driver.find_element_by_id("identifierId")
input_element.send_keys(dato)

# Haz clic en el botón siguiente
boton_siguiente = driver.find_element_by_xpath('//*[@id="identifierNext"]/div/button')
boton_siguiente.click()
