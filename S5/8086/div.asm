.model small
.code
mov ah,00h
mov al,08h
mov bl,05h
div bl
mov ah,4ch
int 21h
end

