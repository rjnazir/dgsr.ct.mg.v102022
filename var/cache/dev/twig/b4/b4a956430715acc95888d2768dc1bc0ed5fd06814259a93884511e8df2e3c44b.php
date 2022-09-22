<?php

/* @Admin/CtImprimeTechUse/search.html.twig */
class __TwigTemplate_8950e7186f469ec8ae18d07de38558500228032f63e9e852e6866964fe1c383c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTechUse/search.html.twig", 1);
        $this->blocks = array(
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
        $__internal_aa324a38eeaaf20b295550389b76469bd660d36805bd186fb800dcc2f757d223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa324a38eeaaf20b295550389b76469bd660d36805bd186fb800dcc2f757d223->enter($__internal_aa324a38eeaaf20b295550389b76469bd660d36805bd186fb800dcc2f757d223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/search.html.twig"));

        $__internal_5262fe6567859939eff7dcc8b421e21a33852bea81f4f5883e62cfa7d37a4d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5262fe6567859939eff7dcc8b421e21a33852bea81f4f5883e62cfa7d37a4d00->enter($__internal_5262fe6567859939eff7dcc8b421e21a33852bea81f4f5883e62cfa7d37a4d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/search.html.twig"));

        // line 12
        $context["menu_imprime_tech_use"] = true;
        // line 13
        $context["menu_imprime_tech_use_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa324a38eeaaf20b295550389b76469bd660d36805bd186fb800dcc2f757d223->leave($__internal_aa324a38eeaaf20b295550389b76469bd660d36805bd186fb800dcc2f757d223_prof);

        
        $__internal_5262fe6567859939eff7dcc8b421e21a33852bea81f4f5883e62cfa7d37a4d00->leave($__internal_5262fe6567859939eff7dcc8b421e21a33852bea81f4f5883e62cfa7d37a4d00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a90ca1a8c72e4d367bec3d862291595fdbaa0a7b0d5305d29bd08692f975f509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90ca1a8c72e4d367bec3d862291595fdbaa0a7b0d5305d29bd08692f975f509->enter($__internal_a90ca1a8c72e4d367bec3d862291595fdbaa0a7b0d5305d29bd08692f975f509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6279165796d2c4ea412b88ac73f58782c9b6dbb0cb0c4c1e61ee1c3adb443956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6279165796d2c4ea412b88ac73f58782c9b6dbb0cb0c4c1e61ee1c3adb443956->enter($__internal_6279165796d2c4ea412b88ac73f58782c9b6dbb0cb0c4c1e61ee1c3adb443956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche imprimé technique ";
        
        $__internal_6279165796d2c4ea412b88ac73f58782c9b6dbb0cb0c4c1e61ee1c3adb443956->leave($__internal_6279165796d2c4ea412b88ac73f58782c9b6dbb0cb0c4c1e61ee1c3adb443956_prof);

        
        $__internal_a90ca1a8c72e4d367bec3d862291595fdbaa0a7b0d5305d29bd08692f975f509->leave($__internal_a90ca1a8c72e4d367bec3d862291595fdbaa0a7b0d5305d29bd08692f975f509_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97a54ec04e2428079f8285a40dd2cef1156cca45b569f136698acae8fb85fb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a54ec04e2428079f8285a40dd2cef1156cca45b569f136698acae8fb85fb7f->enter($__internal_97a54ec04e2428079f8285a40dd2cef1156cca45b569f136698acae8fb85fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_39171ad6ae678c097c293dfa4f890cbc6326de0bb43fabc86e5b0380e8b38059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39171ad6ae678c097c293dfa4f890cbc6326de0bb43fabc86e5b0380e8b38059->enter($__internal_39171ad6ae678c097c293dfa4f890cbc6326de0bb43fabc86e5b0380e8b38059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_39171ad6ae678c097c293dfa4f890cbc6326de0bb43fabc86e5b0380e8b38059->leave($__internal_39171ad6ae678c097c293dfa4f890cbc6326de0bb43fabc86e5b0380e8b38059_prof);

        
        $__internal_97a54ec04e2428079f8285a40dd2cef1156cca45b569f136698acae8fb85fb7f->leave($__internal_97a54ec04e2428079f8285a40dd2cef1156cca45b569f136698acae8fb85fb7f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_dffc0c20cb6aa2761482763452358dc035dec3783901457de076b4d4b79b3167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffc0c20cb6aa2761482763452358dc035dec3783901457de076b4d4b79b3167->enter($__internal_dffc0c20cb6aa2761482763452358dc035dec3783901457de076b4d4b79b3167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef6e4823249b4b345accba9776ebb44dde20c00686bac02171b86bfda7f4878e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6e4823249b4b345accba9776ebb44dde20c00686bac02171b86bfda7f4878e->enter($__internal_ef6e4823249b4b345accba9776ebb44dde20c00686bac02171b86bfda7f4878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        // line 27
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
        echo "\" method=\"POST\">
        <div class=\"row\" id=\"search-form\">
            <div class=\"col-md-12\">
                <div class=\"box box-default\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Recherche</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"ct_imprime_tech_id\">Type d'imprimé technique</label>
                                        <select required id=\"ct_imprime_tech_id\" name=\"ct_imprime_tech_id\" class=\"form-control select2\" >
                                        <option value=\"\" disabled selected>Sélectionner imprimé technique</option>
                                            ";
        // line 42
        if ((($context["ct_imprime_tech_id"] ?? $this->getContext($context, "ct_imprime_tech_id")) && ($context["nomImprimeTech"] ?? $this->getContext($context, "nomImprimeTech")))) {
            // line 43
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, ($context["ct_imprime_tech_id"] ?? $this->getContext($context, "ct_imprime_tech_id")), "html", null, true);
            echo "\" selected>
                                                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["nomImprimeTech"] ?? $this->getContext($context, "nomImprimeTech"))), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        // line 47
        echo "
                                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_its"] ?? $this->getContext($context, "list_its")));
        foreach ($context['_seq'] as $context["_key"] => $context["list_it"]) {
            // line 49
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list_it"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["list_it"], "nomImprimeTech", array())), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_it'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"itu_numero\">Par numéro d'imprimé technique</label>
                                    <input id=\"itu_numero\" name=\"itu_numero\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["itu_numero"] ?? $this->getContext($context, "itu_numero")), "html", null, true);
        echo "\"
                                        class=\"form-control\" />
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
        // line 74
        if (($context["imprime"] ?? $this->getContext($context, "imprime"))) {
            // line 75
            echo "                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-warning\" title=\"Modifier\"
                                           href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                            Modifier
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 86
            if ($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituUsed", array())) {
                // line 87
                echo "                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                        href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_reset", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                            Annuler utilisation
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 99
            echo "                            ";
        }
        // line 100
        echo "                        </div>
                        ";
        // line 101
        if (($context["imprime"] ?? $this->getContext($context, "imprime"))) {
            // line 102
            echo "                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"box box-primary\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Détail de l'imprimé technique</h3>
                                    </div>

                                    <div class=\"box-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° bordereau d'envoi</label>
                                                    <input value=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctBordereau", array()), "blNumero", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° de l'imprimé technique</label>
                                                    <input value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituNumero", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Centre destinataire</label>
                                                    <input value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctCentre", array()), "ctrNom", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-check\" style=\"margin:15px 0 0; padding: 15px 0 0 0\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" style=\"margin:0 0 0 4px; padding: 0 0 0 4px;\" ";
            // line 133
            if ($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituUsed", array())) {
                echo " checked ";
            }
            echo " disabled>
                                                    <label class=\"form-check-label\" for=\"flexCheckCheckedDisabled\">
                                                        &nbsp;&nbsp;Est-utlisé ?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Imprimé technique</label>
                                                    <input value=\"";
            // line 144
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctImprimeTech", array()), "nomImprimeTech", array())), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Motif d'utilisation IT</label>
                                                    <input value=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituMotifUsed", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° contröle / N° d'enregistrement</label>
                                                    <input value=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ctControle", array()), "html", null, true);
            echo "\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\" style=\"margin: 12px 0 0 0; padding: 12px 0 0 0;\">
                                                    <a class=\"btn btn-warning\" title=\"Modifier\"
                                                    href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_edit", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-edit\"></i>
                                                        Modifier
                                                    </a>
                                                    ";
            // line 168
            if ($this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "ituUsed", array())) {
                // line 169
                echo "                                                    <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                                    href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_reset", array("id" => $this->getAttribute(($context["imprime"] ?? $this->getContext($context, "imprime")), "id", array()))), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-trash\"></i>
                                                        Annuler utilisation
                                                    </a>
                                                    ";
            }
            // line 175
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 183
        echo "                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_ef6e4823249b4b345accba9776ebb44dde20c00686bac02171b86bfda7f4878e->leave($__internal_ef6e4823249b4b345accba9776ebb44dde20c00686bac02171b86bfda7f4878e_prof);

        
        $__internal_dffc0c20cb6aa2761482763452358dc035dec3783901457de076b4d4b79b3167->leave($__internal_dffc0c20cb6aa2761482763452358dc035dec3783901457de076b4d4b79b3167_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f2327ed0304b80c047c78ed80be84c42db5dab74a42720259502ef2876a9d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2327ed0304b80c047c78ed80be84c42db5dab74a42720259502ef2876a9d96->enter($__internal_7f2327ed0304b80c047c78ed80be84c42db5dab74a42720259502ef2876a9d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_df6e5f373c7abc3dc92166086a86cf88a32204ad937c0e7bbef0cca66b5a0020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6e5f373c7abc3dc92166086a86cf88a32204ad937c0e7bbef0cca66b5a0020->enter($__internal_df6e5f373c7abc3dc92166086a86cf88a32204ad937c0e7bbef0cca66b5a0020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _recuperer_numero_it_ajax_uri = \"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
        echo "\";
    </script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.used_it.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_df6e5f373c7abc3dc92166086a86cf88a32204ad937c0e7bbef0cca66b5a0020->leave($__internal_df6e5f373c7abc3dc92166086a86cf88a32204ad937c0e7bbef0cca66b5a0020_prof);

        
        $__internal_7f2327ed0304b80c047c78ed80be84c42db5dab74a42720259502ef2876a9d96->leave($__internal_7f2327ed0304b80c047c78ed80be84c42db5dab74a42720259502ef2876a9d96_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 199,  418 => 197,  413 => 195,  405 => 191,  396 => 190,  381 => 183,  371 => 175,  363 => 170,  360 => 169,  358 => 168,  351 => 164,  342 => 158,  331 => 150,  322 => 144,  306 => 133,  298 => 128,  287 => 120,  278 => 114,  264 => 102,  262 => 101,  259 => 100,  256 => 99,  245 => 91,  239 => 87,  237 => 86,  227 => 79,  221 => 75,  219 => 74,  201 => 59,  193 => 53,  184 => 50,  179 => 49,  175 => 48,  172 => 47,  166 => 44,  161 => 43,  159 => 42,  140 => 27,  138 => 26,  129 => 23,  126 => 22,  121 => 21,  112 => 18,  109 => 17,  104 => 16,  95 => 15,  83 => 9,  76 => 6,  67 => 5,  48 => 3,  38 => 1,  36 => 13,  34 => 12,  11 => 1,);
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

{% block title %}{{ parent() }} Recherche imprimé technique {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_imprime_tech_use        = true %}
{% set menu_imprime_tech_use_search = true %}

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
    <form action=\"{{ path('imprime_tech_use_search') }}\" method=\"POST\">
        <div class=\"row\" id=\"search-form\">
            <div class=\"col-md-12\">
                <div class=\"box box-default\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Recherche</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"ct_imprime_tech_id\">Type d'imprimé technique</label>
                                        <select required id=\"ct_imprime_tech_id\" name=\"ct_imprime_tech_id\" class=\"form-control select2\" >
                                        <option value=\"\" disabled selected>Sélectionner imprimé technique</option>
                                            {% if (ct_imprime_tech_id and nomImprimeTech) %}
                                                <option value=\"{{ ct_imprime_tech_id }}\" selected>
                                                    {{ nomImprimeTech | upper }}
                                                </option>
                                            {% endif %}

                                            {% for list_it in list_its %}
                                                <option value=\"{{ list_it.id }}\">
                                                    {{ list_it.nomImprimeTech | upper }}
                                                </option>
                                            {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"itu_numero\">Par numéro d'imprimé technique</label>
                                    <input id=\"itu_numero\" name=\"itu_numero\" value=\"{{ itu_numero }}\"
                                        class=\"form-control\" />
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
                            {% if imprime %}
                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-warning\" title=\"Modifier\"
                                           href=\"{{ path('imprime_tech_use_edit', {'id':imprime.id}) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                            Modifier
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {% if imprime.ituUsed %}
                            <div class=\"col-md-2\">
                                <div class=\"box-body\">
                                    <div class=\"form-group\">
                                        <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                        href=\"{{ path('imprime_tech_use_reset', {'id':imprime.id}) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                            Annuler utilisation
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {% endif %}
                            {% endif %}
                        </div>
                        {% if imprime %}
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"box box-primary\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Détail de l'imprimé technique</h3>
                                    </div>

                                    <div class=\"box-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° bordereau d'envoi</label>
                                                    <input value=\"{{ imprime.ctBordereau.blNumero }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° de l'imprimé technique</label>
                                                    <input value=\"{{ imprime.ituNumero }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Centre destinataire</label>
                                                    <input value=\"{{ imprime.ctCentre.ctrNom }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-check\" style=\"margin:15px 0 0; padding: 15px 0 0 0\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" style=\"margin:0 0 0 4px; padding: 0 0 0 4px;\" {% if imprime.ituUsed %} checked {% endif %} disabled>
                                                    <label class=\"form-check-label\" for=\"flexCheckCheckedDisabled\">
                                                        &nbsp;&nbsp;Est-utlisé ?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Imprimé technique</label>
                                                    <input value=\"{{ imprime.ctImprimeTech.nomImprimeTech|upper }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>Motif d'utilisation IT</label>
                                                    <input value=\"{{ imprime.ituMotifUsed }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\">
                                                    <label>N° contröle / N° d'enregistrement</label>
                                                    <input value=\"{{ imprime.ctControle }}\" class=\"form-control\" disabled />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"form-group\" style=\"margin: 12px 0 0 0; padding: 12px 0 0 0;\">
                                                    <a class=\"btn btn-warning\" title=\"Modifier\"
                                                    href=\"{{ path('imprime_tech_use_edit', {'id':imprime.id}) }}\">
                                                        <i class=\"fa fa-edit\"></i>
                                                        Modifier
                                                    </a>
                                                    {% if imprime.ituUsed %}
                                                    <a class=\"btn btn-default\" title=\"Annuler utilisation\"
                                                    href=\"{{ path('imprime_tech_use_reset', {'id':imprime.id}) }}\">
                                                        <i class=\"fa fa-trash\"></i>
                                                        Annuler utilisation
                                                    </a>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
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
        var _recuperer_numero_it_ajax_uri = \"{{ path('imprime_tech_use_search') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/search.used_it.js') }}\"></script>
{% endblock %}", "@Admin/CtImprimeTechUse/search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\search.html.twig");
    }
}
