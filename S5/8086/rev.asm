.model small
.code
mov al,05h
mov cl,04h
rol al,cl
mov ah,4ch
int 21h
end
