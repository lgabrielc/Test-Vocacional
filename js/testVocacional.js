class testVocacional { //Creación de la clase
    get program() {
        let program =
        // <--- HECHOS --->
        // Ingenierias que oferta el ITSM
        "ingenieria( ambiental)." +
        "ingenieria( bioquimica)." +
        "ingenieria( civil)." +
        "ingenieria( electromecanica)." +
        "ingenieria( gestion_empresarial)." +
        "ingenieria( industrial)." +
        "ingenieria( petrolera)." +
        "ingenieria( sistemas_computacionales)." +
        "ingenieria( tics)."+

         //% Conjunto de habilidades requeridas en el perfil de ingreso y egreso de cada carrera %
        //% El nivel de importancia de cada habilidad se mide de la siguiente manera ---> %
        //% 1 = Poco o nada, 2 = Normal, 3 = Bastante o mucho %
        //% 1.  ¿Se te da con facilidad resolver problemas de la vida cotidiana? %
        "es_habilidad_de(resolver_problemas, ambiental, 2)." +
        "es_habilidad_de(resolver_problemas, bioquimica, 1)." +
        "es_habilidad_de(resolver_problemas, civil, 2)." +
        "es_habilidad_de(resolver_problemas, electromecanica, 1)." +
        "es_habilidad_de(resolver_problemas, gestion_empresarial, 2)." +
        "es_habilidad_de(resolver_problemas, industrial, 2)." +
        "es_habilidad_de(resolver_problemas, petrolera, 1)." +
        "es_habilidad_de(resolver_problemas, sistemas_computacionales, 2)." +
        "es_habilidad_de(resolver_problemas, tics, 2)." +

        //% 2. ¿Una de tus mayores virtudes es el razonamiento lógico-matemático? %
        "es_habilidad_de(razonamiento_logico_matematico, ambiental, 1)." +
        "es_habilidad_de(razonamiento_logico_matematico, bioquimica, 3)." +
        "es_habilidad_de(razonamiento_logico_matematico, civil, 3)." +
        "es_habilidad_de(razonamiento_logico_matematico, electromecanica, 3)." +
        "es_habilidad_de(razonamiento_logico_matematico, gestion_empresarial, 1)."+
        "es_habilidad_de(razonamiento_logico_matematico, industrial, 2)." +
        "es_habilidad_de(razonamiento_logico_matematico, petrolera, 3)." +
        "es_habilidad_de(razonamiento_logico_matematico, sistemas_computacionales, 3)."+
        "es_habilidad_de(razonamiento_logico_matematico, tics, 3)."+

        //% 3. ¿Disfrutas hacer experimentos y trabajo de laboratorio? %
        "es_habilidad_de(trabajo_laboratorio, ambiental, 2)."+
        "es_habilidad_de(trabajo_laboratorio, bioquimica, 3)."+
        "es_habilidad_de(trabajo_laboratorio, civil, 1)."+
        "es_habilidad_de(trabajo_laboratorio, electromecanica, 1)."+
        "es_habilidad_de(trabajo_laboratorio, gestion_empresarial, 1)."+
        "es_habilidad_de(trabajo_laboratorio, industrial, 1)."+
        "es_habilidad_de(trabajo_laboratorio, petrolera, 2)."+
        "es_habilidad_de(trabajo_laboratorio, sistemas_computacionales, 1)."+
        "es_habilidad_de(trabajo_laboratorio, tics, 1)."+

        //% 4. ¿Te sientes capacitado para contribuir a un mejor rendimiento de una empresa?  %
        "es_habilidad_de(mejorar_rendimiento_empresarial, ambiental, 1)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, bioquimica, 1)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, civil, 1)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, electromecanica, 2)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, gestion_empresarial, 3)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, industrial, 3)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, petrolera, 1)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, sistemas_computacionales, 1)."+
        "es_habilidad_de(mejorar_rendimiento_empresarial, tics, 1)."+

        //% 5. ¿Te mantienes al día de la nuevas tendencias tecnológicas? %
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, ambiental, 1)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, bioquimica, 1)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, civil, 1)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, electromecanica, 2)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, gestion_empresarial, 1)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, industrial, 1)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, petrolera, 1)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, sistemas_computacionales, 3)."+
        "es_habilidad_de(gusto_por_tendencias_tecnologicas, tics, 3)."+

        //% 6. ¿Consideras que eres emprendedor? %
        "es_habilidad_de(ser_emprendedor, ambiental, 2)."+
        "es_habilidad_de(ser_emprendedor, bioquimica, 1)."+
        "es_habilidad_de(ser_emprendedor, civil, 1)."+
        "es_habilidad_de(ser_emprendedor, electromecanica, 1)."+
        "es_habilidad_de(ser_emprendedor, gestion_empresarial, 3)."+
        "es_habilidad_de(ser_emprendedor, industrial, 2)." +
        "es_habilidad_de(ser_emprendedor, petrolera, 1)."+
        "es_habilidad_de(ser_emprendedor, sistemas_computacionales, 1)."+
        "es_habilidad_de(ser_emprendedor, tics, 1)."+

        //% 7. ¿De qué nivel es tu conocimiento geográfico? %
        "es_habilidad_de(conocimiento_geografico, ambiental, 2)."+
        "es_habilidad_de(conocimiento_geografico, bioquimica, 1)."+
        "es_habilidad_de(conocimiento_geografico, civil, 3)."+
        "es_habilidad_de(conocimiento_geografico, electromecanica, 1)."+
        "es_habilidad_de(conocimiento_geografico, gestion_empresarial, 1)."+
        "es_habilidad_de(conocimiento_geografico, industrial, 1)."+
        "es_habilidad_de(conocimiento_geografico, petrolera, 3)."+
        "es_habilidad_de(conocimiento_geografico, sistemas_computacionales, 1)."+
        "es_habilidad_de(conocimiento_geografico, tics, 1)."+

        //% 8. ¿Tienes liderazgo al trabajar en grupo? %
        "es_habilidad_de(liderazgo, ambiental, 1)."+
        "es_habilidad_de(liderazgo, bioquimica, 2)."+
        "es_habilidad_de(liderazgo, civil, 1)."+
        "es_habilidad_de(liderazgo, electromecanica, 1)."+
        "es_habilidad_de(liderazgo, gestion_empresarial, 3)."+
        "es_habilidad_de(liderazgo, industrial, 3)."+
        "es_habilidad_de(liderazgo, petrolera, 1)."+
        "es_habilidad_de(liderazgo, sistemas_computacionales, 1)."+
        "es_habilidad_de(liderazgo, tics, 1)."+

        //% 9. ¿Tienes bases de programación o informática? %
        "es_habilidad_de(saber_programar, ambiental, 1)."+
        "es_habilidad_de(saber_programar, bioquimica, 1)."+
        "es_habilidad_de(saber_programar, civil, 1)."+
        "es_habilidad_de(saber_programar, electromecanica, 2)."+
        "es_habilidad_de(saber_programar, gestion_empresarial, 1)."+
        "es_habilidad_de(saber_programar, industrial, 1)."+
        "es_habilidad_de(saber_programar, petrolera, 1)."+
        "es_habilidad_de(saber_programar, sistemas_computacionales, 3)."+
        "es_habilidad_de(saber_programar, tics, 3)."+

        //% 10. ¿Te gustaría colaborar implantando y evaluando sistemas de producción? %
        "es_habilidad_de(evaluar_sistemas_produccion, ambiental, 1)."+
        "es_habilidad_de(evaluar_sistemas_produccion, bioquimica, 1)."+
        "es_habilidad_de(evaluar_sistemas_produccion, civil, 1)."+
        "es_habilidad_de(evaluar_sistemas_produccion, electromecanica, 1)."+
        "es_habilidad_de(evaluar_sistemas_produccion, gestion_empresarial, 2)."+
        "es_habilidad_de(evaluar_sistemas_produccion, industrial, 3)."+
        "es_habilidad_de(evaluar_sistemas_produccion, petrolera, 1)."+
        "es_habilidad_de(evaluar_sistemas_produccion, sistemas_computacionales, 1)."+
        "es_habilidad_de(evaluar_sistemas_produccion, tics, 1)."+

        //% 11. ¿Sientes interés por las electrónica y los componentes de las máquinas? %
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, ambiental, 1)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, bioquimica, 1)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, civil, 2)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, electromecanica, 3)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, gestion_empresarial, 1)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, industrial, 1)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, petrolera, 1)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, sistemas_computacionales, 1)."+
        "es_habilidad_de(conocimientos_electronicos_y_mecanicos, tics, 1)."+

        //% 12. ¿Consideras que las energías renovables son el futuro? %
        "es_habilidad_de(confiar_energias_renovables, ambiental, 3)."+
        "es_habilidad_de(confiar_energias_renovables, bioquimica, 2)."+
        "es_habilidad_de(confiar_energias_renovables, civil, 1)."+
        "es_habilidad_de(confiar_energias_renovables, electromecanica, 1)."+
        "es_habilidad_de(confiar_energias_renovables, gestion_empresarial, 2)."+
        "es_habilidad_de(confiar_energias_renovables, industrial, 1)."+
        "es_habilidad_de(confiar_energias_renovables, petrolera, 1)."+
        "es_habilidad_de(confiar_energias_renovables, sistemas_computacionales, 1)."+
        "es_habilidad_de(confiar_energias_renovables, tics, 1)."+

        //% 13. ¿Se te da bien el dibujo técnico? %
        "es_habilidad_de(dibujo_tecnico, ambiental, 1)."+
        "es_habilidad_de(dibujo_tecnico, bioquimica, 1)."+
        "es_habilidad_de(dibujo_tecnico, civil, 3)."+
        "es_habilidad_de(dibujo_tecnico, electromecanica, 2)."+
        "es_habilidad_de(dibujo_tecnico, gestion_empresarial, 1)."+
        "es_habilidad_de(dibujo_tecnico, industrial, 2)."+
        "es_habilidad_de(dibujo_tecnico, petrolera, 1)."+
        "es_habilidad_de(dibujo_tecnico, sistemas_computacionales, 1)."+
        "es_habilidad_de(dibujo_tecnico, tics, 1)."+

        //% 14. ¿Te interesa el estudio de los hidrocarburos? %
        "es_habilidad_de(interes_hidrocarburos, ambiental, 1)."+
        "es_habilidad_de(interes_hidrocarburos, bioquimica, 2)."+
        "es_habilidad_de(interes_hidrocarburos, civil, 1)."+
        "es_habilidad_de(interes_hidrocarburos, electromecanica, 1)."+
        "es_habilidad_de(interes_hidrocarburos, gestion_empresarial, 1)."+
        "es_habilidad_de(interes_hidrocarburos, industrial, 1)."+
        "es_habilidad_de(interes_hidrocarburos, petrolera, 3)."+
        "es_habilidad_de(interes_hidrocarburos, sistemas_computacionales, 1)."+
        "es_habilidad_de(interes_hidrocarburos, tics, 1)."+

        //% 15. ¿Te importa la naturaleza y los animales? %
        "es_habilidad_de(interes_naturaleza_animales, ambiental, 3)."+
        "es_habilidad_de(interes_naturaleza_animales, bioquimica, 2)."+
        "es_habilidad_de(interes_naturaleza_animales, civil, 1)."+
        "es_habilidad_de(interes_naturaleza_animales, electromecanica, 1)."+
        "es_habilidad_de(interes_naturaleza_animales, gestion_empresarial, 2)."+
        "es_habilidad_de(interes_naturaleza_animales, industrial, 1)."+
        "es_habilidad_de(interes_naturaleza_animales, petrolera, 1)."+
        "es_habilidad_de(interes_naturaleza_animales, sistemas_computacionales, 1)."+
        "es_habilidad_de(interes_naturaleza_animales, tics, 1)."+

        //% 16. ¿Te gusta la exploración de campo? %
        "es_habilidad_de(exploracion_de_campo, ambiental, 2)."+
        "es_habilidad_de(exploracion_de_campo, bioquimica, 1)."+
        "es_habilidad_de(exploracion_de_campo, civil, 3)."+
        "es_habilidad_de(exploracion_de_campo, electromecanica, 1)."+
        "es_habilidad_de(exploracion_de_campo, gestion_empresarial, 1)."+
        "es_habilidad_de(exploracion_de_campo, industrial, 1)."+
        "es_habilidad_de(exploracion_de_campo, petrolera, 3)."+
        "es_habilidad_de(exploracion_de_campo, sistemas_computacionales, 1)."+
        "es_habilidad_de(exploracion_de_campo, tics, 1)."+

        //% 17. ¿Te interesa saber de qué está conformada la materia y los organismos? %
        "es_habilidad_de(comprender_materia, ambiental, 2)."+
        "es_habilidad_de(comprender_materia, bioquimica, 3)."+
        "es_habilidad_de(comprender_materia, civil, 1)."+
        "es_habilidad_de(comprender_materia, electromecanica, 1)."+
        "es_habilidad_de(comprender_materia, gestion_empresarial, 1)."+
        "es_habilidad_de(comprender_materia, industrial, 1)."+
        "es_habilidad_de(comprender_materia, petrolera, 1)."+
        "es_habilidad_de(comprender_materia, sistemas_computacionales, 1)."+
        "es_habilidad_de(comprender_materia, tics, 1)."+

        //% 18. ¿Quieres aprender los fundamentos físicos del electromagnetismo? %
        "es_habilidad_de(entender_fisica, ambiental, 1)."+
        "es_habilidad_de(entender_fisica, bioquimica, 1)."+
        "es_habilidad_de(entender_fisica, civil, 1)."+
        "es_habilidad_de(entender_fisica, electromecanica, 3)."+
        "es_habilidad_de(entender_fisica, gestion_empresarial, 1)."+
        "es_habilidad_de(entender_fisica, industrial, 1)."+
        "es_habilidad_de(entender_fisica, petrolera, 2)."+
        "es_habilidad_de(entender_fisica, sistemas_computacionales, 1)."+
        "es_habilidad_de(entender_fisica, tics, 1)."+

        //% 19. ¿Te gustaría saber cómo se desarrollan las aplicaciones que utilizas diariamente en tu celular, computadora u otro dispositvo? %
        "es_habilidad_de(desarrollar_aplicaciones, ambiental, 1)."+
        "es_habilidad_de(desarrollar_aplicaciones, bioquimica, 1)."+
        "es_habilidad_de(desarrollar_aplicaciones, civil, 1)."+
        "es_habilidad_de(desarrollar_aplicaciones, electromecanica, 1)."+
        "es_habilidad_de(desarrollar_aplicaciones, gestion_empresarial, 1)."+
        "es_habilidad_de(desarrollar_aplicaciones, industrial, 1)."+
        "es_habilidad_de(desarrollar_aplicaciones, petrolera, 1)."+
        "es_habilidad_de(desarrollar_aplicaciones, sistemas_computacionales, 3)."+
        "es_habilidad_de(desarrollar_aplicaciones, tics, 2)."+

        //% 20. ¿Quieres saber cómo funciona el mundo de las telecomunicaciones? %
        "es_habilidad_de(interes_telecomunicaciones, ambiental, 1)."+
        "es_habilidad_de(interes_telecomunicaciones, bioquimica, 1)."+
        "es_habilidad_de(interes_telecomunicaciones, civil, 1)."+
        "es_habilidad_de(interes_telecomunicaciones, electromecanica, 1)."+
        "es_habilidad_de(interes_telecomunicaciones, gestion_empresarial, 1)."+
        "es_habilidad_de(interes_telecomunicaciones, industrial, 1)."+
        "es_habilidad_de(interes_telecomunicaciones, petrolera, 1)."+
        "es_habilidad_de(interes_telecomunicaciones, sistemas_computacionales, 2)."+
        "es_habilidad_de(interes_telecomunicaciones, tics, 3)."+

        "evaluar_IA(X, Op, Ing, L, Ln) :- ingenieria( Ing), Ing = ambiental,"+
                                        "es_habilidad_de(X, Ing, Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C1+Op),"+
                                        "Ln = [Aux,C2,C3,C4,C5,C6,C7,C8,C9]."+
        "evaluar_IGE(X, Op, Ing, L, Ln) :- ingenieria( Ing), Ing = gestion_empresarial,"+
                                        "es_habilidad_de(X, Ing, Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C5+Op),"+
                                        "Ln = [C1,C2,C3,C4,Aux,C6,C7,C8,C9]."+

        "evaluar_II(X, Op, Ing, L, Ln) :- ingenieria(Ing), Ing = industrial,"+
                                        "es_habilidad_de(X,Ing,Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C6+Op),"+
                                        "Ln = [C1,C2,C3,C4,C5,Aux,C7,C8,C9]."+

        "evaluar_IBQ(X, Op, Ing, L, Ln) :- ingenieria(Ing), Ing = bioquimica,"+
                                        "es_habilidad_de(X,Ing,Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C2+Op),"+
                                        "Ln = [C1,Aux,C3,C4,C5,C6,C7,C8,C9]."+

        "evaluar_IC(X, Op, Ing, L, Ln) :- ingenieria(Ing), Ing = civil,"+
                                        "es_habilidad_de(X,Ing,Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C3+Op),"+
                                        "Ln = [C1,C2,Aux,C4,C5,C6,C7,C8,C9]."+

        "evaluar_IE(X, Op, Ing, L, Ln) :- ingenieria(Ing), Ing = electromecanica,"+
                                        "es_habilidad_de(X,Ing,Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C4+Op),"+
                                        "Ln = [C1,C2,C3,Aux,C5,C6,C7,C8,C9]."+

        "evaluar_IP(X, Op, Ing, L, Ln) :- ingenieria(Ing), Ing = petrolera,"+
                                        "es_habilidad_de(X,Ing,Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C7+Op),"+
                                        "Ln = [C1,C2,C3,C4,C5,C6,Aux,C8,C9]."+

        "evaluar_ISC(X, Op, Ing, L, Ln) :- ingenieria(Ing), Ing = sistemas_computacionales,"+
                                        "es_habilidad_de(X,Ing,Op),"+
                                        "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                        "Aux is (C8+Op),"+
                                        "Ln = [C1,C2,C3,C4,C5,C6,C7,Aux,C9]."+

        "evaluar_ITICS(X, Op, Ing, L, Ln) :- ingenieria(Ing), Ing = tics,"+
                                            "es_habilidad_de(X,Ing,Op),"+
                                            "L = [C1,C2,C3,C4,C5,C6,C7,C8,C9|[]],"+
                                            "Aux is (C9+Op),"+
                                            "Ln = [C1,C2,C3,C4,C5,C6,C7,C8,Aux]."+

        "evaluar_pregunta1(X, Op, L, Ln) :- Op == 1, evaluar_IBQ(X, Op, bioquimica, L, L1), evaluar_IE(X, Op, electromecanica,L1, L2), evaluar_IP(X, Op, petrolera, L2, Ln);"+
                                           "Op == 2, evaluar_IA(X, Op, ambiental,L, L1), evaluar_IC(X, Op, civil, L1, L2), evaluar_IGE(X, Op, gestion_empresarial, L2, L3), evaluar_II(X, Op, industrial, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5),evaluar_ITICS(X, Op, tics, L5, Ln)."+


        "evaluar_pregunta2(X, Op, L, Ln) :-  Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IGE(X, Op, gestion_empresarial,L1, Ln);"+
                                            "Op == 2, evaluar_II(X, Op, industrial, L, Ln);"+
                                            "Op == 3, evaluar_IBQ(X, Op, bioquimica,L, L1), evaluar_IC(X, Op, civil, L1, L2), evaluar_IE(X, Op, electromecanica,L2, L3), evaluar_IP(X, Op, petrolera, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln)."+

        "evaluar_pregunta3(X, Op, L, Ln) :- Op == 1, evaluar_IC(X, Op, civil, L, L1), evaluar_IE(X, Op, electromecanica, L1, L2), evaluar_IGE(X, Op, gestion_empresarial, L2, L3), evaluar_II(X, Op, industrial, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                           "Op == 2, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IP(X, Op, petrolera, L1, Ln);"+
                                           "Op == 3, evaluar_IBQ(X, Op, bioquimica, L, Ln)."+

        "evaluar_pregunta4(X, Op, L, Ln) :-  Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IC(X, Op, civil, L2, L3), evaluar_IP(X, Op, petrolera, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                            "Op == 2, evaluar_IE(X, Op, electromecanica, L, Ln);"+
                                            "Op == 3, evaluar_IGE(X, Op, gestion_empresarial, L, L1), evaluar_II(X, Op, industrial, L1, Ln)."+

        "evaluar_pregunta5(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IC(X, Op, civil, L2, L3), evaluar_IGE(X, Op, gestion_empresarial, L3, L4), evaluar_II(X, Op, industrial, L4, L5), evaluar_IP(X, Op, petrolera, L5, Ln);"+
                                           "Op == 2, evaluar_IE(X, Op, electromecanica, L, Ln);"+
                                           "Op == 3, evaluar_ISC(X, Op, sistemas_computacionales, L, L1), evaluar_ITICS(X, Op, tics, L1, Ln)."+

        "evaluar_pregunta6(X, Op, L, Ln) :-  Op == 1, evaluar_IBQ(X, Op, bioquimica, L, L1), evaluar_IC(X, Op, civil, L1, L2), evaluar_IE(X, Op, electromecanica, L2, L3), evaluar_IP(X, Op, petrolera, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                            "Op == 2, evaluar_IA(X, Op, ambiental, L, L1), evaluar_II(X, Op, industrial, L1, Ln);"+
                                            "Op == 3, evaluar_IGE(X, Op, gestion_empresarial, L, Ln)."+

        "evaluar_pregunta7(X, Op, L, Ln) :- Op == 1, evaluar_IBQ(X, Op, bioquimica, L, L1), evaluar_IE(X, Op, electromecanica, L1, L2), evaluar_IGE(X, Op, gestion_empresarial, L2, L3), evaluar_II(X, Op, industrial, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                           "Op == 2, evaluar_IA(X, Op, ambiental, L, Ln);"+
                                           "Op == 3, evaluar_IC(X, Op, civil, L, L1), evaluar_IP(X, Op, petrolera, L1, Ln)."+

        "evaluar_pregunta8(X, Op, L, Ln) :-  Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IC(X, Op, civil, L1, L2), evaluar_IE(X, Op, electromecanica, L2, L3), evaluar_IP(X, Op, petrolera, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                            "Op == 2, evaluar_IBQ(X, Op, bioquimica, L, Ln);"+
                                            "Op == 3, evaluar_IGE(X, Op, gestion_empresarial, L, L1), evaluar_II(X, Op, industrial, L1, Ln)."+

        "evaluar_pregunta9(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IC(X, Op, civil, L2, L3), evaluar_IGE(X, Op, gestion_empresarial, L3, L4), evaluar_II(X, Op, industrial, L4, L5), evaluar_IP(X, Op, petrolera, L5, Ln);"+
                                           "Op == 2, evaluar_IE(X, Op, electromecanica, L, Ln);"+
                                           "Op == 3, evaluar_ISC(X, Op, sistemas_computacionales, L, L1), evaluar_ITICS(X, Op, tics, L1, Ln)."+

         "evaluar_pregunta10(X, Op, L, Ln) :-  Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IC(X, Op, civil, L2, L3), evaluar_IE(X, Op, electromecanica, L3, L4), evaluar_IP(X, Op, petrolera, L4, L5), evaluar_ISC(X, Op, sistemas_computacionales, L5, L6), evaluar_ITICS(X, Op, tics, L6, Ln);"+
                                              "Op == 2, evaluar_IGE(X, Op, gestion_empresarial, L, Ln);"+
                                              "Op == 3, evaluar_II(X, Op, industrial, L, Ln)."+

         "evaluar_pregunta11(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IGE(X, Op, gestion_empresarial, L2, L3), evaluar_II(X, Op, industrial, L3, L4), evaluar_IP(X, Op, petrolera, L4, L5), evaluar_ISC(X, Op, sistemas_computacionales, L5, L6), evaluar_ITICS(X, Op, tics, L6, Ln);"+
                                             "Op == 2, evaluar_IC(X, Op, civil, L, Ln);"+
                                             "Op == 3, evaluar_IE(X, Op, electromecanica, L, Ln)."+


         "evaluar_pregunta12(X, Op, L, Ln) :-  Op == 1, evaluar_IC(X, Op, civil, L, L1), evaluar_IE(X, Op, electromecanica, L1, L2), evaluar_II(X, Op, industrial, L2, L3), evaluar_IP(X, Op, petrolera, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                              "Op == 2, evaluar_IBQ(X, Op, bioquimica, L, L1), evaluar_IGE(X, Op, gestion_empresarial, L1, Ln);"+
                                              "Op == 3, evaluar_IA(X, Op, ambiental, L, Ln)."+

         "evaluar_pregunta13(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IGE(X, Op, gestion_empresarial,L2,L3), evaluar_IP(X, Op, petrolera, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics,L5,Ln);"+
                                             "Op == 2, evaluar_IE(X, Op, electromecanica, L, L1), evaluar_II(X,Op, industrial, L1, Ln);"+
                                             "Op == 3, evaluar_IC(X,Op, civil, L, Ln)."+

         "evaluar_pregunta14(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IC(X, Op, civil, L1, L2), evaluar_IE(X, Op, electromecanica, L2, L3), evaluar_IGE(X, Op, gestion_empresarial, L3, L4), evaluar_II(X, Op, industrial, L4, L5), evaluar_ISC(X, Op, sistemas_computacionales, L5, L6), evaluar_ITICS(X, Op, tics, L6, Ln);"+
                                             "Op == 2, evaluar_IBQ(X, Op, bioquimica, L, Ln);"+
                                             "Op == 3, evaluar_IP(X, Op, petrolera, L, Ln)."+

         "evaluar_pregunta15(X, Op, L, Ln) :- Op == 1, evaluar_IC(X, Op, civil, L, L1), evaluar_IE(X, Op, electromecanica, L1, L2), evaluar_II(X, Op, industrial, L2, L3), evaluar_IP(X, Op, petrolera, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                             "Op == 2, evaluar_IBQ(X, Op, bioquimica, L, L1), evaluar_IGE(X, Op, gestion_empresarial, L1, Ln);"+
                                             "Op == 3, evaluar_IA(X, Op, ambiental, L, Ln)."+

          "evaluar_pregunta16(X, Op, L, Ln) :- Op == 1, evaluar_IBQ(X, Op, bioquimica, L, L1), evaluar_IE(X, Op, electromecanica, L1, L2), evaluar_IGE(X, Op, gestion_empresarial, L2, L3), evaluar_II(X, Op, industrial, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                              "Op == 2, evaluar_IA(X, Op, ambiental, L, Ln);"+
                                              "Op == 3, evaluar_IC(X, Op, civil, L, L1), evaluar_IP(X, Op, petrolera, L1, Ln)."+

          "evaluar_pregunta17(X, Op, L, Ln) :- Op == 1, evaluar_IC(X, Op, civil, L, L1), evaluar_IE(X, Op, electromecanica, L1, L2), evaluar_IGE(X, Op, gestion_empresarial, L2, L3), evaluar_II(X, Op, industrial, L3, L4), evaluar_ISC(X, Op, sistemas_computacionales, L4, L5), evaluar_ITICS(X, Op, tics, L5, Ln);"+
                                              "Op == 2, evaluar_IA(X, Op, ambiental, L, Ln);"+
                                              "Op == 3, evaluar_IBQ(X, Op, bioquimica, L, Ln)."+

         "evaluar_pregunta18(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IC(X, Op, civil, L2, L3), evaluar_IGE(X, Op, gestion_empresarial,L3,L4), evaluar_II(X, Op, industrial, L4, L5), evaluar_ISC(X, Op, sistemas_computacionales, L5, L6), evaluar_ITICS(X, Op, tics,L6,Ln);"+
                                             "Op == 2, evaluar_IP(X, Op, petrolera, L, Ln);"+
                                             "Op == 3, evaluar_IE(X, Op, electromecanica, L, Ln)."+

          "evaluar_pregunta19(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IC(X, Op, civil, L2, L3), evaluar_IE(X, Op, electromecanica, L3,L4), evaluar_IGE(X, Op, gestion_empresarial, L4, L5), evaluar_II(X, Op, industrial, L5, L6), evaluar_IP(X, Op, petrolera, L6, Ln);"+
                                              "Op == 2, evaluar_ITICS(X, Op, tics, L, Ln);"+
                                              "Op == 3, evaluar_ISC(X, Op, sistemas_computacionales, L, Ln)."+

          "evaluar_pregunta20(X, Op, L, Ln) :- Op == 1, evaluar_IA(X, Op, ambiental, L, L1), evaluar_IBQ(X, Op, bioquimica, L1, L2), evaluar_IC(X, Op, civil, L2, L3), evaluar_IE(X, Op, electromecanica, L3,L4), evaluar_IGE(X, Op, gestion_empresarial, L4, L5), evaluar_II(X, Op, industrial, L5, L6), evaluar_IP(X, Op, petrolera, L6, Ln);"+
                                              "Op == 2, evaluar_ISC(X, Op, sistemas_computacionales, L, Ln);"+
                                              "Op == 3, evaluar_ITICS(X, Op, tics, L, Ln)."+

          "principal(ListaOp, C1, C2, C3, C4, C5, C6, C7, C8, C9) :- ListaOp = [Op1, Op2, Op3, Op4, Op5, Op6, Op7, Op8, Op9, Op10, Op11, Op12, Op13, Op14, Op15, Op16, Op17, Op18, Op19, Op20],"+
                                                                    "X1 = resolver_problemas,"+
                                                                    "evaluar_pregunta1(X1, Op1, [0,0,0,0,0,0,0,0,0], L1),"+
                                                                    "X2 = razonamiento_logico_matematico,"+
                                                                    "evaluar_pregunta2(X2, Op2, L1, L2),"+
                                                                    "X3=trabajo_laboratorio,"+
                                                                    "evaluar_pregunta3(X3, Op3, L2, L3),"+
                                                                    "X4=mejorar_rendimiento_empresarial,"+
                                                                    "evaluar_pregunta4(X4, Op4, L3, L4),"+
                                                                    "X5=gusto_por_tendencias_tecnologicas,"+
                                                                    "evaluar_pregunta5(X5, Op5, L4, L5),"+
                                                                    "X6=ser_emprendedor,"+
                                                                    "evaluar_pregunta6(X6, Op6, L5, L6),"+
                                                                    "X7=conocimiento_geografico,"+
                                                                    "evaluar_pregunta7(X7, Op7, L6, L7),"+
                                                                    "X8=liderazgo,"+
                                                                    "evaluar_pregunta8(X8, Op8, L7, L8),"+
                                                                    "X9=saber_programar,"+
                                                                    "evaluar_pregunta9(X9, Op9, L8, L9),"+
                                                                    "X10=evaluar_sistemas_produccion,"+
                                                                    "evaluar_pregunta10(X10, Op10, L9, L10),"+
                                                                    "X11=conocimientos_electronicos_y_mecanicos,"+
                                                                    "evaluar_pregunta11(X11, Op11, L10, L11),"+
                                                                    "X12=confiar_energias_renovables,"+
                                                                    "evaluar_pregunta12(X12, Op12, L11, L12),"+
                                                                    "X13=dibujo_tecnico,"+
                                                                    "evaluar_pregunta13(X13, Op13, L12, L13),"+
                                                                    "X14=interes_hidrocarburos,"+
                                                                    "evaluar_pregunta14(X14, Op14, L13, L14),"+
                                                                    "X15=interes_naturaleza_animales,"+
                                                                    "evaluar_pregunta15(X15, Op15, L14, L15),"+
                                                                    "X16=exploracion_de_campo,"+
                                                                    "evaluar_pregunta16(X16, Op16, L15, L16),"+
                                                                    "X17=comprender_materia,"+
                                                                    "evaluar_pregunta17(X17, Op17, L16, L17),"+
                                                                    "X18=entender_fisica,"+
                                                                    "evaluar_pregunta18(X18, Op18, L17, L18),"+
                                                                    "X19=desarrollar_aplicaciones,"+
                                                                    "evaluar_pregunta19(X19, Op19, L18, L19),"+
                                                                    "X20=interes_telecomunicaciones,"+
                                                                    "evaluar_pregunta20(X20, Op20, L19, L20),"+
                                                                    "obtener_porcentajes(L20, LP),"+
                                                                    "LP = [C1,C2,C3,C4,C5,C6,C7,C8,C9]."+

        "obtener_porcentajes(L, LP) :- L = [C1, C2, C3, C4, C5, C6, C7, C8,C9],"+
                                    "Total is 30,"+
                                    "X1 is ((C1/Total)*100),"+
                                    "X2 is ((C2/Total)*100),"+
                                    "X3 is ((C3/Total)*100),"+
                                    "X4 is ((C4/Total)*100),"+
                                    "X5 is ((C5/Total)*100),"+
                                    "X6 is ((C6/Total)*100),"+
                                    "X7 is ((C7/Total)*100)," +
                                    "X8 is ((C8/Total)*100),"+
                                    "X9 is ((C9/Total)*100),"+
                                    "LP = [X1,X2,X3,X4,X5,X6,X7,X8,X9].";

        return program;
    }
}
