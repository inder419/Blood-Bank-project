 < ? p h p   $ u s e r n a m e   =   f i l t e r _ i n p u t ( I N P U T _ P O S T ,   ' u s e r n a m e ' ) ;   
 $ p a s s w o r d   =   f i l t e r _ i n p u t ( I N P U T _ P O S T ,   ' p a s s w o r d ' ) ;   
 i f   ( ! e m p t y ( $ u s e r n a m e ) ) {   
 i f   ( ! e m p t y ( $ p a s s w o r d ) ) {   
 $ h o s t   =   " l o c a l h o s t " ; 
   $ d b u s e r n a m e   =   " 1 3 3 6 8 8 " ; 
   $ d b p a s s w o r d   =   " R a h u l 2 0 0 3 " ;   
 $ d b n a m e   = 
   " 1 3 3 6 8 8 " ; 
   / /   C r e a t e   c o n n e c t i o n   
 $ c o n n   =   n e w   m y s q l i   ( $ h o s t ,   $ d b u s e r n a m e ,   $ d b p a s s w o r d ,   $ d b n a m e ) ;   
 i f   ( m y s q l i _ c o n n e c t _ e r r o r ( ) ) 
 {   d i e ( ' C o n n e c t   E r r o r   ( ' .   m y s q l i _ c o n n e c t _ e r r n o ( )   . ' )   '   .   m y s q l i _ c o n n e c t _ e r r o r ( ) ) ;   
 } 
 e l s e {   
 $ s q l   =   " I N S E R T   I N T O   a c c o u n t   ( u s e r n a m e ,   p a s s w o r d )   
 v a l u e s   ( ' $ u s e r n a m e ' , ' $ p a s s w o r d ' ) " ;   
 i f   ( $ c o n n - > q u e r y ( $ s q l ) ) { 
   e c h o   " N e w   r e c o r d   i s   i n s e r t e d   s u c e s s f u l l y " ; 
   }   
 e l s e {   
 e c h o   " E r r o r :   " .   $ s q l   . "   
 " .   $ c o n n - > e r r o r ; 
   }   
 $ c o n n - > c l o s e ( ) ;   } 
   }   
 e l s e { 
   e c h o   " P a s s w o r d   s h o u l d   n o t   b e   e m p t y " ;   d i e ( ) ;   }   }   
 e l s e {   e c h o   " U s e r n a m e   s h o u l d   n o t   b e   e m p t y " ;   d i e ( ) ;   }   ? >