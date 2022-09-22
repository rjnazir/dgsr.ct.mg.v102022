<?php

/* @Admin/CtVisite/add.html.twig */
class __TwigTemplate_eb4ea3fa39c4a8623003acb8733176bceaa49925f6a42c2d7693441dae422d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisite/add.html.twig", 1);
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
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => ":form:fields.html.twig"));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctUsage", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctVerificateur", array()), array(0 => $this));
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctCentre", array()), array(0 => $this));
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctVisiteExtra", array()), array(0 => $this));
        // line 13
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctAnomalie", array()), array(0 => $this));
        // line 49
        $context["menu_visite"] = true;
        // line 50
        $context["menu_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 16
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 17
            $context["required"] = false;
        }
        // line 19
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 21
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 22
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 23
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 24
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 27
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 28
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 29
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 30
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 31
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 34
        $context["options"] = ($context["choices"] ?? null);
        // line 35
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 36
        echo "</select>
    </span>";
    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Visite technique ";
    }

    // line 42
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 54
            echo "        <div class=\"callout callout-success\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 59
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 60
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
    ";
        // line 65
        echo "    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Feuille de caisse</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fdc_date\">Séléctionner la date</label>
                                    <input required id=\"ct_fdc_date\" name=\"ct_fdc_date\" class=\"form-control datepicker\"
                                           value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>

                            <!-- Type visite -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fdc_type\">Séléctionner le type de visite</label>
                                    <select class=\"form-control\" data-placeholder=\"Choisir\" id=\"ct_fdc_type\" name=\"ct_fdc_type\">
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        ";
        // line 93
        if (($context["type_visites"] ?? null)) {
            // line 94
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["type_visites"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vst"]) {
                // line 95
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vst"], "id", array()), "html", null, true);
                echo "\">
                                                    ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["vst"], "tpvLibelle", array()), "html", null, true);
                echo "
                                                </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vst'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                                        ";
        }
        // line 100
        echo "
                                    </select>
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"";
        // line 106
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fdc_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_fdc_centre\" name=\"ct_fdc_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 116
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 118
                echo "                                                    ";
                if (($this->getAttribute($context["province"], "id", array()) == $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "id", array()))) {
                    // line 119
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                    echo "\">
                                                            ";
                    // line 120
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                    echo "
                                                        </option>
                                                    ";
                }
                // line 123
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-feuille-caisse\" disabled style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-feuille-caisse\"></span>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-right\" id=\"link-download-feuille-caisse-omavet\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 152
        echo "        <div class=\"col-md-4\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Fiche verificateur</h3>
                </div>

                <div class=\"box-body\">
                    <form>
                        <div class=\"modal-body\">
                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_date_verif\">Séléctionner la date</label>
                                    <input required id=\"ct_date_verif\" name=\"ct_date_verif\" class=\"form-control datepicker\"
                                           value=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>

                            <!-- Centre -->
                            <div class=\"";
        // line 171
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_verif_centre\">Séléctionner le centre</label>
                                        <select required id=\"ct_verif_centre\" name=\"ct_verif_centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 181
            echo "                                                    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                        ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 183
                echo "                                                            ";
                if (($this->getAttribute($context["province"], "id", array()) == $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "id", array()))) {
                    // line 184
                    echo "                                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                    echo "\">
                                                                    ";
                    // line 185
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 188
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                                                    </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Verificateur -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif\">Séléctionner verificateur</label>
                                    <select required id=\"ct_verif\" name=\"ct_verif\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verificateurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["verif"]) {
            // line 206
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["verif"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 207
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["verif"], "usrName", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            disabled id=\"btn-generate-fiche-verif\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-offset-2 col-md-6\">
                                    <span class=\"pull-left\" id=\"link-download-fiche-verif\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        ";
        // line 232
        echo "        <div class=\"col-md-4\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Liste anomalies</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">
                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_anomalie_date\">Séléctionner la date</label>
                                    <input required id=\"ct_anomalie_date\" name=\"ct_anomalie_date\" class=\"form-control datepicker\"
                                           value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>

                                <!-- Centre -->
                            <div class=\"";
        // line 251
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_anomalie_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_anomalie_centre\" name=\"ct_anomalie_centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 261
            echo "                                                    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                        ";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 263
                echo "                                                            ";
                if (($this->getAttribute($context["province"], "id", array()) == $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "id", array()))) {
                    // line 264
                    echo "                                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                    echo "\">
                                                                    ";
                    // line 265
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 268
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                                                    </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-liste-anomalie\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-liste-anomalie\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    ";
        // line 296
        echo "    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                       class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"visite-form\">
        ";
        // line 325
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 329
        echo "                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations carte grise</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-carte-grise\">
                            <div class=\"";
        // line 335
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctCentre", array()), 'row');
        echo "
                            </div>
                            ";
        // line 338
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgDateEmission", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 340
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgImmatriculation", array()), 'row');
        echo "
                            ";
        // line 341
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgNumIdentification", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgNom", array()), 'row');
        echo "
                            ";
        // line 345
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgProfession", array()), 'row');
        echo "
                            ";
        // line 346
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgAdresse", array()), 'row');
        echo "
                            ";
        // line 347
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgPhone", array()), 'row');
        echo "
                            ";
        // line 348
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgCommune", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 350
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgIsTransport", array()), 'row');
        echo "
                            <div id=\"form-transport\" class=\"hidden\">
                                ";
        // line 352
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgNomCooperative", array()), 'row');
        echo "
                                ";
        // line 353
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgItineraire", array()), 'row');
        echo "
                                ";
        // line 354
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgNumVignette", array()), 'row');
        echo "
                                ";
        // line 355
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctZoneDeserte", array()), 'row');
        echo "
                            </div>
                            <hr>
                            ";
        // line 358
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgNumCarteViolette", array()), 'row');
        echo "
                            ";
        // line 359
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgLieuCarteViolette", array()), 'row');
        echo "
                            ";
        // line 360
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgDateCarteViolette", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 363
        echo "
                            <hr>
                            ";
        // line 365
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgPatente", array()), 'row');
        echo "
                            ";
        // line 366
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgAni", array()), 'row');
        echo "
                        </div>
                    </div>

                    ";
        // line 371
        echo "                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-vehicule\">
                            ";
        // line 377
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                            ";
        // line 378
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                            ";
        // line 379
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                            ";
        // line 380
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                            ";
        // line 381
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctCarosserie", array()), 'row');
        echo "
                            ";
        // line 382
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                            ";
        // line 383
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctSourceEnergie", array()), 'row');
        echo "
                            ";
        // line 384
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgPuissanceAdmin", array()), 'row');
        echo "
                            ";
        // line 385
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgNbrAssis", array()), 'row');
        echo "
                            ";
        // line 386
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                            ";
        // line 387
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                            ";
        // line 388
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                            ";
        // line 389
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgMiseEnService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 393
        echo "
                        </div>

                        ";
        // line 397
        echo "                        <div class=\"hidden\">
                            <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\" />
                            ";
        // line 399
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                            ";
        // line 400
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                            ";
        // line 401
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                            ";
        // line 402
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                            ";
        // line 403
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                            ";
        // line 404
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                            ";
        // line 405
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgNbrDebout", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 407
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgRta", array()), 'row');
        echo "
                            ";
        // line 409
        echo "                            ";
        // line 410
        echo "                            <hr>
                            ";
        // line 412
        echo "                            ";
        // line 413
        echo "                            ";
        // line 414
        echo "                            <hr>
                            ";
        // line 415
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgDateVignette", array()), 'row');
        echo "
                            ";
        // line 416
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctCarteGrise", array()), "cgLieuVignette", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 422
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations visite technique</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"";
        // line 429
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 430
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctCentre", array()), 'row');
        echo "
                            </div>
                            ";
        // line 432
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctTypeVisite", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 434
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctUsage", array()), 'row');
        echo "
                            ";
        // line 435
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctUtilisation", array()), 'row');
        echo "
                            ";
        // line 436
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctAnomalie", array()), 'row');
        echo "
                            <div id=\"form-duree-reparation\" class=\"hidden\">
                                ";
        // line 438
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vstDureeReparation", array()), 'row');
        echo "
                            </div>
                            ";
        // line 440
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vstDateExpiration", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 443
        echo "
                            ";
        // line 444
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctVerificateur", array()), 'row');
        echo "
                            ";
        // line 445
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctVisiteExtra", array()), 'row');
        echo "
                        </div>
                    </div>
                    ";
        // line 481
        echo "                </div>
            </div>

            ";
        // line 485
        echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite\"/>
                                    ";
        // line 493
        echo "                                           ";
        // line 494
        echo "                                </div>
                                ";
        // line 496
        echo "                                    ";
        // line 497
        echo "                                ";
        // line 498
        echo "                                <div class=\"col-md-4\">
                                    <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting-add\"
                                           value=\"Générer la carte visite\" name=\"generate_carte_visite-add\"/>
                                    <span class=\"kl-edit-link-download-cv\" id=\"link-download-cg\"></span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        ";
        // line 507
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 511
    public function block_javascripts($context, array $blocks = array())
    {
        // line 512
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>

        \$(document).ready(function() {
            \$('#ct_fdc_type').on('select change', function() {
                if(\$(this).val() != '') {
                    \$('#btn-generate-feuille-caisse').prop('disabled', false);
                } else {
                    \$('#btn-generate-feuille-caisse').prop('disabled', true);
                }
            });
        });

        \$(document).ready(function() {
            \$('#ct_verif').on('select change', function() {
                if(\$(this).val() != '') {
                    \$('#btn-generate-fiche-verif').prop('disabled', false);
                } else {
                    \$('#btn-generate-fiche-verif').prop('disabled', true);
                }
            });
        });

        var _fill_form_carte_grise_ajax_uri = \"";
        // line 539
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_info_by_immatriculation_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 540
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 541
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _generate_reporting_ajax_uri = \"";
        // line 542
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_reporting_ajax");
        echo "\";
        var _generate_feuille_caisse_ajax_uri = \"";
        // line 543
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_reporting_feuille_caisse_ajax");
        echo "\";
        var _select_verif_by_centre_ajax_uri = \"";
        // line 544
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _generate_fiche_ctrl_verif_ajax_uri = \"";
        // line 545
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_reporting_fiche_controle_ajax");
        echo "\";
        var _generate_liste_anomalies_ajax_uri = \"";
        // line 546
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_liste_anomalies_ajax");
        echo "\"
        var _select_usage_by_type_visite_ajax_uri = \"";
        // line 547
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_usage_by_type_visite_ajax");
        echo "\";
        var _select_expiration_by_usage_ajax_uri = \"";
        // line 548
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_expiration_by_usage_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.visite.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "@Admin/CtVisite/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 550,  988 => 548,  984 => 547,  980 => 546,  976 => 545,  972 => 544,  968 => 543,  964 => 542,  960 => 541,  956 => 540,  952 => 539,  926 => 516,  918 => 512,  915 => 511,  908 => 507,  897 => 498,  895 => 497,  893 => 496,  890 => 494,  888 => 493,  879 => 485,  874 => 481,  868 => 445,  864 => 444,  861 => 443,  859 => 440,  854 => 438,  849 => 436,  845 => 435,  841 => 434,  836 => 432,  831 => 430,  825 => 429,  816 => 422,  808 => 416,  804 => 415,  801 => 414,  799 => 413,  797 => 412,  794 => 410,  792 => 409,  788 => 407,  783 => 405,  779 => 404,  775 => 403,  771 => 402,  767 => 401,  763 => 400,  759 => 399,  755 => 397,  750 => 393,  748 => 389,  744 => 388,  740 => 387,  736 => 386,  732 => 385,  728 => 384,  724 => 383,  720 => 382,  716 => 381,  712 => 380,  708 => 379,  704 => 378,  700 => 377,  692 => 371,  685 => 366,  681 => 365,  677 => 363,  675 => 360,  671 => 359,  667 => 358,  661 => 355,  657 => 354,  653 => 353,  649 => 352,  644 => 350,  639 => 348,  635 => 347,  631 => 346,  626 => 345,  622 => 343,  617 => 341,  613 => 340,  608 => 338,  603 => 336,  597 => 335,  589 => 329,  583 => 325,  552 => 296,  526 => 271,  519 => 269,  513 => 268,  507 => 265,  502 => 264,  499 => 263,  495 => 262,  490 => 261,  486 => 260,  472 => 251,  464 => 246,  448 => 232,  425 => 210,  416 => 207,  411 => 206,  407 => 205,  391 => 191,  384 => 189,  378 => 188,  372 => 185,  367 => 184,  364 => 183,  360 => 182,  355 => 181,  351 => 180,  337 => 171,  329 => 166,  313 => 152,  286 => 126,  279 => 124,  273 => 123,  267 => 120,  262 => 119,  259 => 118,  255 => 117,  250 => 116,  246 => 115,  232 => 106,  224 => 100,  221 => 99,  212 => 96,  207 => 95,  202 => 94,  200 => 93,  185 => 81,  167 => 65,  164 => 63,  155 => 60,  152 => 59,  147 => 58,  138 => 55,  135 => 54,  130 => 53,  127 => 52,  121 => 46,  114 => 43,  111 => 42,  104 => 40,  99 => 36,  97 => 35,  95 => 34,  89 => 31,  87 => 30,  85 => 29,  83 => 28,  81 => 27,  76 => 24,  69 => 23,  67 => 22,  61 => 21,  57 => 19,  54 => 17,  52 => 16,  49 => 15,  45 => 1,  43 => 50,  41 => 49,  39 => 13,  37 => 12,  35 => 11,  33 => 10,  31 => 9,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtVisite/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisite\\add.html.twig");
    }
}
