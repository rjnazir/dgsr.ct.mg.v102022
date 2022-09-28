<?php

/* @Admin/CtBordereau/search.html.twig */
class __TwigTemplate_e8c94486ef7677539235c79d2645b7fcfcd3d09ba4d7ca08a74d636d8d207cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtBordereau/search.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32f3393224c6457640a8bfc8c80405865f2d378598a1ac3779ba423d8bba1f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f3393224c6457640a8bfc8c80405865f2d378598a1ac3779ba423d8bba1f13->enter($__internal_32f3393224c6457640a8bfc8c80405865f2d378598a1ac3779ba423d8bba1f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/search.html.twig"));

        $__internal_9090c132d72e270aa569abd7c912160b40551c069a09a2090a81f718ab86cdc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9090c132d72e270aa569abd7c912160b40551c069a09a2090a81f718ab86cdc1->enter($__internal_9090c132d72e270aa569abd7c912160b40551c069a09a2090a81f718ab86cdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/search.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["search_form"] ?? $this->getContext($context, "search_form")), "ctCentre", array()), array(0 => $this));
        // line 39
        $context["menu_bordereau"] = true;
        // line 40
        $context["menu_bordereau_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f3393224c6457640a8bfc8c80405865f2d378598a1ac3779ba423d8bba1f13->leave($__internal_32f3393224c6457640a8bfc8c80405865f2d378598a1ac3779ba423d8bba1f13_prof);

        
        $__internal_9090c132d72e270aa569abd7c912160b40551c069a09a2090a81f718ab86cdc1->leave($__internal_9090c132d72e270aa569abd7c912160b40551c069a09a2090a81f718ab86cdc1_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4b296a1056be3da8b640d60f9de9e67c92e07feb822ae680f38a34f181b46aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b296a1056be3da8b640d60f9de9e67c92e07feb822ae680f38a34f181b46aec->enter($__internal_4b296a1056be3da8b640d60f9de9e67c92e07feb822ae680f38a34f181b46aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_301131b569794387dad4e181c868ba82d22ae844d54614a19781cabc50d16a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301131b569794387dad4e181c868ba82d22ae844d54614a19781cabc50d16a36->enter($__internal_301131b569794387dad4e181c868ba82d22ae844d54614a19781cabc50d16a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 6
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 7
            $context["required"] = false;
        }
        // line 9
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 90%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 11
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 12
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 13
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 14
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 17
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 18
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 19
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 20
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 21
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 24
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 25
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 26
        echo "</select>
    </span>";
        
        $__internal_301131b569794387dad4e181c868ba82d22ae844d54614a19781cabc50d16a36->leave($__internal_301131b569794387dad4e181c868ba82d22ae844d54614a19781cabc50d16a36_prof);

        
        $__internal_4b296a1056be3da8b640d60f9de9e67c92e07feb822ae680f38a34f181b46aec->leave($__internal_4b296a1056be3da8b640d60f9de9e67c92e07feb822ae680f38a34f181b46aec_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_47775c697133faa9b1b74b5f5a1d8e27493a760a41b57d552cfa1c9cd7d328f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47775c697133faa9b1b74b5f5a1d8e27493a760a41b57d552cfa1c9cd7d328f8->enter($__internal_47775c697133faa9b1b74b5f5a1d8e27493a760a41b57d552cfa1c9cd7d328f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2e08429f90295bea86443a4728a9bd7ebc98dc42dd31b5336f6cce2589ab954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e08429f90295bea86443a4728a9bd7ebc98dc42dd31b5336f6cce2589ab954->enter($__internal_f2e08429f90295bea86443a4728a9bd7ebc98dc42dd31b5336f6cce2589ab954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche bordereau de livraison ";
        
        $__internal_f2e08429f90295bea86443a4728a9bd7ebc98dc42dd31b5336f6cce2589ab954->leave($__internal_f2e08429f90295bea86443a4728a9bd7ebc98dc42dd31b5336f6cce2589ab954_prof);

        
        $__internal_47775c697133faa9b1b74b5f5a1d8e27493a760a41b57d552cfa1c9cd7d328f8->leave($__internal_47775c697133faa9b1b74b5f5a1d8e27493a760a41b57d552cfa1c9cd7d328f8_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c53191ae2e8744cbe2fc70cf0ab7e0abc5a73e45a1403a3b02fa3e7b37240af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c53191ae2e8744cbe2fc70cf0ab7e0abc5a73e45a1403a3b02fa3e7b37240af->enter($__internal_5c53191ae2e8744cbe2fc70cf0ab7e0abc5a73e45a1403a3b02fa3e7b37240af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f12549ee2deb759d8d4765fd9ef92ad2948f2db959421a9593229782d33011c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12549ee2deb759d8d4765fd9ef92ad2948f2db959421a9593229782d33011c1->enter($__internal_f12549ee2deb759d8d4765fd9ef92ad2948f2db959421a9593229782d33011c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_f12549ee2deb759d8d4765fd9ef92ad2948f2db959421a9593229782d33011c1->leave($__internal_f12549ee2deb759d8d4765fd9ef92ad2948f2db959421a9593229782d33011c1_prof);

        
        $__internal_5c53191ae2e8744cbe2fc70cf0ab7e0abc5a73e45a1403a3b02fa3e7b37240af->leave($__internal_5c53191ae2e8744cbe2fc70cf0ab7e0abc5a73e45a1403a3b02fa3e7b37240af_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_806e021dfed86e31380e1d162a7fba27250c6ffe47bc80c33f090105870d89d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806e021dfed86e31380e1d162a7fba27250c6ffe47bc80c33f090105870d89d9->enter($__internal_806e021dfed86e31380e1d162a7fba27250c6ffe47bc80c33f090105870d89d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dad1944110f9c12a3f1d57b3e4a23fec726ace66a795a457e3b738e3ce8034d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad1944110f9c12a3f1d57b3e4a23fec726ace66a795a457e3b738e3ce8034d4->enter($__internal_dad1944110f9c12a3f1d57b3e4a23fec726ace66a795a457e3b738e3ce8034d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "        <div class=\"callout callout-success\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    
    ";
        // line 55
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_search");
        echo "\" method=\"POST\">
        <div class=\"row\" id=\"search-form\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Recherche bordereau</h3>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <label for=\"bl_numero\">Numéro du bordereau</label>
                                    <input required id=\"bl_numero\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["bl_numero"] ?? $this->getContext($context, "bl_numero")), "html", null, true);
        echo "\" name=\"bl_numero\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <label for=\"ct_centre_id\">Centre de destination</label>
                                    <select required id=\"ct_centre_id\" name=\"ct_centre_id\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Sélectionner centre de destination</option>
                                            ";
        // line 77
        if ((($context["ct_centre_id"] ?? $this->getContext($context, "ct_centre_id")) && ($context["ctr_nom"] ?? $this->getContext($context, "ctr_nom")))) {
            // line 78
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, ($context["ct_centre_id"] ?? $this->getContext($context, "ct_centre_id")), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, ($context["ctr_nom"] ?? $this->getContext($context, "ctr_nom")), "html", null, true);
            echo "</option>
                                            ";
        }
        // line 80
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_provinces"] ?? $this->getContext($context, "list_provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["list_province"]) {
            // line 81
            echo "                                                <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["list_province"], "prvNom", array())), "html", null, true);
            echo "\">
                                                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_centres"] ?? $this->getContext($context, "list_centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["list_centre"]) {
                // line 83
                echo "                                                        ";
                if (($this->getAttribute($context["list_province"], "id", array()) == $this->getAttribute($this->getAttribute($context["list_centre"], "ctProvince", array()), "id", array()))) {
                    // line 84
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list_centre"], "id", array()), "html", null, true);
                    echo "\">
                                                            ";
                    // line 85
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["list_centre"], "ctrNom", array())), "html", null, true);
                    echo "
                                                        </option>
                                                        ";
                }
                // line 88
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                                </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Rechercher
                                    </button>
                                </div>
                            </div>
                        </div>
                        ";
        // line 107
        if (($context["list_in_its"] ?? $this->getContext($context, "list_in_its"))) {
            // line 108
            echo "                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"pull-left btn btn-success\"
                                            id=\"btn-generate-bordereau-livraison\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <span class=\"pull-left\" id=\"link-download-bordereau-livraison\"></span>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 126
        echo "                    </div>
                </div>

                ";
        // line 130
        echo "                ";
        if (($context["list_in_its"] ?? $this->getContext($context, "list_in_its"))) {
            // line 131
            echo "                <div class=\"row\" id=\"search-form\">
                    <div class=\"col-md-12\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Liste des imprimés dans le bordereau</h3>
                            </div>
                            <div class=\"box-body table-responsive\">
                                <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                                    <thead>
                                    <tr>
                                        ";
            // line 142
            echo "                                        <th width=\"22%\">N° bordereau</th>
                                        <th width=\"15%\">Nom centre</th>
                                        <th width=\"15%\">Nom IT</th>
                                        <th width=\"8%\">Unité</th>
                                        <th width=\"13%\">N° IT</th>
                                        <th width=\"27%\">Réf. expression de besoin</th>
                                        ";
            // line 149
            echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_in_its"] ?? $this->getContext($context, "list_in_its")));
            foreach ($context['_seq'] as $context["_key"] => $context["list_in_it"]) {
                // line 153
                echo "                                        <tr>
                                            ";
                // line 157
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "blNumero", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["list_in_it"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["list_in_it"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["list_in_it"], "ctImprimeTech", array()), "uteImprimeTech", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "blDebutNumero", array()), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["list_in_it"], "blFinNumero", array())) {
                    echo " à ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "blFinNumero", array()), "html", null, true);
                    echo " ";
                }
                echo "</td>
                                            <td>";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "refExpr", array()), "html", null, true);
                echo " du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list_in_it"], "dateRefExpr", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_in_it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 172
        echo "            </div>
        </div>
    </form>

";
        
        $__internal_dad1944110f9c12a3f1d57b3e4a23fec726ace66a795a457e3b738e3ce8034d4->leave($__internal_dad1944110f9c12a3f1d57b3e4a23fec726ace66a795a457e3b738e3ce8034d4_prof);

        
        $__internal_806e021dfed86e31380e1d162a7fba27250c6ffe47bc80c33f090105870d89d9->leave($__internal_806e021dfed86e31380e1d162a7fba27250c6ffe47bc80c33f090105870d89d9_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a9af489d75f4197e1cb3d4987da7e21643e608f08cb937b4580fcd44d6586b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9af489d75f4197e1cb3d4987da7e21643e608f08cb937b4580fcd44d6586b7->enter($__internal_0a9af489d75f4197e1cb3d4987da7e21643e608f08cb937b4580fcd44d6586b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_531d684b498eade88199249da35f136f6d28b1d80d076091db0271f78f362a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531d684b498eade88199249da35f136f6d28b1d80d076091db0271f78f362a85->enter($__internal_531d684b498eade88199249da35f136f6d28b1d80d076091db0271f78f362a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _bordereau_generer_bl_uri = \"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_generer_bl");
        echo "\";
    </script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.bordereau.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_531d684b498eade88199249da35f136f6d28b1d80d076091db0271f78f362a85->leave($__internal_531d684b498eade88199249da35f136f6d28b1d80d076091db0271f78f362a85_prof);

        
        $__internal_0a9af489d75f4197e1cb3d4987da7e21643e608f08cb937b4580fcd44d6586b7->leave($__internal_0a9af489d75f4197e1cb3d4987da7e21643e608f08cb937b4580fcd44d6586b7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtBordereau/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 187,  454 => 185,  449 => 183,  441 => 179,  432 => 178,  418 => 172,  409 => 165,  398 => 162,  388 => 161,  384 => 160,  380 => 159,  376 => 158,  371 => 157,  368 => 153,  364 => 152,  359 => 149,  351 => 142,  339 => 131,  336 => 130,  331 => 126,  311 => 108,  309 => 107,  291 => 91,  284 => 89,  278 => 88,  272 => 85,  267 => 84,  264 => 83,  260 => 82,  255 => 81,  250 => 80,  242 => 78,  240 => 77,  227 => 67,  211 => 55,  208 => 53,  199 => 50,  196 => 49,  191 => 48,  182 => 45,  179 => 44,  174 => 43,  165 => 42,  153 => 36,  146 => 33,  137 => 32,  118 => 30,  107 => 26,  105 => 25,  103 => 24,  97 => 21,  95 => 20,  93 => 19,  91 => 18,  89 => 17,  84 => 14,  77 => 13,  75 => 12,  69 => 11,  65 => 9,  62 => 7,  60 => 6,  51 => 5,  41 => 1,  39 => 40,  37 => 39,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme search_form.ctCentre _self %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 90%;\" oninvalid=\"setErrorClass(\$(this));\"
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {{ placeholder != '' ? placeholder|trans({}, translation_domain) }}
                </option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
    </span>
{%- endblock choice_widget_collapsed -%}

{% block title %}{{ parent() }} Recherche bordereau de livraison {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_bordereau        = true %}
{% set menu_bordereau_search = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    {# Formulaire recherche #}
    <form action=\"{{ path('bordereau_search') }}\" method=\"POST\">
        <div class=\"row\" id=\"search-form\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Recherche bordereau</h3>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <label for=\"bl_numero\">Numéro du bordereau</label>
                                    <input required id=\"bl_numero\" value=\"{{ bl_numero }}\" name=\"bl_numero\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <label for=\"ct_centre_id\">Centre de destination</label>
                                    <select required id=\"ct_centre_id\" name=\"ct_centre_id\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Sélectionner centre de destination</option>
                                            {% if (ct_centre_id and ctr_nom) %}
                                            <option value=\"{{ ct_centre_id }}\" selected>{{ ctr_nom }}</option>
                                            {% endif %}
                                            {% for list_province in list_provinces %}
                                                <optgroup label=\"{{ list_province.prvNom | upper }}\">
                                                    {% for list_centre in list_centres %}
                                                        {% if list_province.id == list_centre.ctProvince.id %}
                                                        <option value=\"{{ list_centre.id }}\">
                                                            {{ list_centre.ctrNom | upper }}
                                                        </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </optgroup>
                                            {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Rechercher
                                    </button>
                                </div>
                            </div>
                        </div>
                        {% if list_in_its %}
                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"pull-left btn btn-success\"
                                            id=\"btn-generate-bordereau-livraison\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <span class=\"pull-left\" id=\"link-download-bordereau-livraison\"></span>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>

                {# Affichage des listes des imprimés techniques dans le BDD #}
                {% if list_in_its %}
                <div class=\"row\" id=\"search-form\">
                    <div class=\"col-md-12\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Liste des imprimés dans le bordereau</h3>
                            </div>
                            <div class=\"box-body table-responsive\">
                                <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                                    <thead>
                                    <tr>
                                        {# <th width=\"5%\"></th> #}
                                        <th width=\"22%\">N° bordereau</th>
                                        <th width=\"15%\">Nom centre</th>
                                        <th width=\"15%\">Nom IT</th>
                                        <th width=\"8%\">Unité</th>
                                        <th width=\"13%\">N° IT</th>
                                        <th width=\"27%\">Réf. expression de besoin</th>
                                        {# <th width=\"10%\">Action</th> #}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for list_in_it in list_in_its %}
                                        <tr>
                                            {# <td>
                                                <input type=\"checkbox\" value=\"{{ list_in_it.id }}\" name=\"delete[]\" />
                                            </td> #}
                                            <td>{{ list_in_it.blNumero }}</td>
                                            <td>{{ list_in_it.ctCentre.ctrNom }}</td>
                                            <td>{{ list_in_it.ctImprimeTech.nomImprimeTech }}</td>
                                            <td>{{ list_in_it.ctImprimeTech.uteImprimeTech }}</td>
                                            <td>{{ list_in_it.blDebutNumero }} {% if (list_in_it.blFinNumero) %} à {{ list_in_it.blFinNumero }} {% endif %}</td>
                                            <td>{{ list_in_it.refExpr }} du {{ list_in_it.dateRefExpr|date('d/m/Y') }}</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </form>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _bordereau_generer_bl_uri = \"{{ path('bordereau_generer_bl') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/search.bordereau.js') }}\"></script>
{% endblock %}", "@Admin/CtBordereau/search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtBordereau\\search.html.twig");
    }
}
