<?php

/* AdminBundle:CtStatistiqueReception:index.html.twig */
class __TwigTemplate_5bf816bbc949edf96e10ad8932951d7df2f94160f72c0dd7a73461bc00fde17c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtStatistiqueReception:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_1f8af2e4908e7fdd3d8aac1fd0d1d9d1273ea37851127af09a1937c2ed182793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8af2e4908e7fdd3d8aac1fd0d1d9d1273ea37851127af09a1937c2ed182793->enter($__internal_1f8af2e4908e7fdd3d8aac1fd0d1d9d1273ea37851127af09a1937c2ed182793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtStatistiqueReception:index.html.twig"));

        $__internal_e6ea9118b98a886a9aba24af0bf8358b3a713c8d7b898e6ee625f8e4e5bb7a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ea9118b98a886a9aba24af0bf8358b3a713c8d7b898e6ee625f8e4e5bb7a7a->enter($__internal_e6ea9118b98a886a9aba24af0bf8358b3a713c8d7b898e6ee625f8e4e5bb7a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtStatistiqueReception:index.html.twig"));

        // line 5
        $context["menu_statistique_reception"] = true;
        // line 6
        $context["menu_statistique_reception_voir"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8af2e4908e7fdd3d8aac1fd0d1d9d1273ea37851127af09a1937c2ed182793->leave($__internal_1f8af2e4908e7fdd3d8aac1fd0d1d9d1273ea37851127af09a1937c2ed182793_prof);

        
        $__internal_e6ea9118b98a886a9aba24af0bf8358b3a713c8d7b898e6ee625f8e4e5bb7a7a->leave($__internal_e6ea9118b98a886a9aba24af0bf8358b3a713c8d7b898e6ee625f8e4e5bb7a7a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_205ef05c4f644f2a61d9a5d5bb614f81848b4c39e50e3434141918fb8bd61fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205ef05c4f644f2a61d9a5d5bb614f81848b4c39e50e3434141918fb8bd61fac->enter($__internal_205ef05c4f644f2a61d9a5d5bb614f81848b4c39e50e3434141918fb8bd61fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5c364d7c18fddfe348f3c8f4d61ce00c5ec1f8098b01a99ef7b95378704b25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c364d7c18fddfe348f3c8f4d61ce00c5ec1f8098b01a99ef7b95378704b25d->enter($__internal_d5c364d7c18fddfe348f3c8f4d61ce00c5ec1f8098b01a99ef7b95378704b25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Statistique des receptions ";
        
        $__internal_d5c364d7c18fddfe348f3c8f4d61ce00c5ec1f8098b01a99ef7b95378704b25d->leave($__internal_d5c364d7c18fddfe348f3c8f4d61ce00c5ec1f8098b01a99ef7b95378704b25d_prof);

        
        $__internal_205ef05c4f644f2a61d9a5d5bb614f81848b4c39e50e3434141918fb8bd61fac->leave($__internal_205ef05c4f644f2a61d9a5d5bb614f81848b4c39e50e3434141918fb8bd61fac_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f34f1765c44469bf8e98d7b37ada855c768d6bc14c18ef8702395f959e9b9e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34f1765c44469bf8e98d7b37ada855c768d6bc14c18ef8702395f959e9b9e71->enter($__internal_f34f1765c44469bf8e98d7b37ada855c768d6bc14c18ef8702395f959e9b9e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76b743f9456a51187e7bd7bb937ee99d001b2c700eb52c22df27b220397872ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b743f9456a51187e7bd7bb937ee99d001b2c700eb52c22df27b220397872ab->enter($__internal_76b743f9456a51187e7bd7bb937ee99d001b2c700eb52c22df27b220397872ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <!-- Modal séléction centre et année -->
    <div id=\"modal-generate\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Génération statististique reception <span id=\"title-type\"></span></h4>
                </div>

                <form>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"type-bilan\" id=\"type-bilan\" />

                        <!-- Centre -->
                        <div class=\"";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"ct-centre\">Séléctionner le centre</label>
                                        <select required id=\"ct-centre\" name=\"ct-centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Alarobia\">
                                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 48
            echo "                                                <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 50
                echo "                                                        ";
                if (($this->getAttribute($context["province"], "id", array()) == $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "id", array()))) {
                    // line 51
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
                    echo "\">
                                                                ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array()), "html", null, true);
                    echo "
                                                            </option>
                                                        ";
                }
                // line 55
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                                </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Type rec -->
                        <div class=\"\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"ct-centre\">Séléctionner le type de reception</label>
                                        <select class=\"form-control select2\" data-placeholder=\"Choisir\" id=\"ct-rec-type\"
                                                style=\"width: 100%;\">
                                            <option value=\"all\" selected=\"selected\">
                                                Tous
                                            </option>
                                            ";
        // line 75
        if (($context["types_rec"] ?? $this->getContext($context, "types_rec"))) {
            // line 76
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types_rec"] ?? $this->getContext($context, "types_rec")));
            foreach ($context['_seq'] as $context["_key"] => $context["rcpt"]) {
                // line 77
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                echo "\">
                                                        ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                echo "
                                                    </option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rcpt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                            ";
        }
        // line 82
        echo "
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Année -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-annee\">Séléctionner l'année</label>
                                    <input required id=\"ct-annee\" name=\"ct-annee\" class=\"form-control yearpicker\"
                                           placeholder=\"2017\" />
                                </div>
                            </div>
                        </div>

                        <!-- Semestre  -->
                        <div class=\"row kl-semestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-semestre\">Séléctionner Semestre</label>
                                    <select id=\"id-semestre\" name=\"ct-semestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Trimestre  -->
                        <div class=\"row kl-trimestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-trimestre\">Séléctionner trimestre</label>
                                    <select id=\"id-trimestre\" name=\"ct-trimestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Mois  -->
                        <div class=\"row kl-mensuel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-mois\">Séléctionner Mois</label>
                                    <select id=\"id-mois\" name=\"ct-mois\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">Janvier</option>
                                        <option value=\"2\">Février</option>
                                        <option value=\"3\">Mars</option>
                                        <option value=\"4\">Avril</option>
                                        <option value=\"5\">Mai</option>
                                        <option value=\"6\">Juin</option>
                                        <option value=\"7\">Juillet</option>
                                        <option value=\"8\">Août</option>
                                        <option value=\"9\">Septembre</option>
                                        <option value=\"10\">Octobre</option>
                                        <option value=\"11\">Novembre</option>
                                        <option value=\"12\">Décembre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal-footer\">
                        <div class=\"col-md-4\">
                            <button type=\"submit\" class=\"pull-right btn btn-primary\" id=\"btn-generate\">
                                Valider
                            </button>
                        </div>
                        <div class=\"col-md-offset-2 col-md-6\">
                            <span class=\"pull-left\" id=\"link-download\"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 169
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Annuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('annuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_reception\"/>
                </div>
            </div>
        </div>

        ";
        // line 188
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Semestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('semestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_reception\"/>
                </div>
            </div>
        </div>

        ";
        // line 207
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Trimestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('trimestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_reception\"/>
                </div>
            </div>
        </div>

        ";
        // line 226
        echo "        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Mensuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('mensuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_76b743f9456a51187e7bd7bb937ee99d001b2c700eb52c22df27b220397872ab->leave($__internal_76b743f9456a51187e7bd7bb937ee99d001b2c700eb52c22df27b220397872ab_prof);

        
        $__internal_f34f1765c44469bf8e98d7b37ada855c768d6bc14c18ef8702395f959e9b9e71->leave($__internal_f34f1765c44469bf8e98d7b37ada855c768d6bc14c18ef8702395f959e9b9e71_prof);

    }

    // line 246
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d473503fa92d21c5ddab9da036c146968fe818357b0bf7907e54fd32c8b90a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d473503fa92d21c5ddab9da036c146968fe818357b0bf7907e54fd32c8b90a71->enter($__internal_d473503fa92d21c5ddab9da036c146968fe818357b0bf7907e54fd32c8b90a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_13f30f03f8566386a244084a886dc18ab724eda0a38c7b15ce79bb815af1bd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f30f03f8566386a244084a886dc18ab724eda0a38c7b15ce79bb815af1bd68->enter($__internal_13f30f03f8566386a244084a886dc18ab724eda0a38c7b15ce79bb815af1bd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var _generate_reporting_ajax_uri = \"";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_reception_generate_reporting_annuel_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/statistique.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_13f30f03f8566386a244084a886dc18ab724eda0a38c7b15ce79bb815af1bd68->leave($__internal_13f30f03f8566386a244084a886dc18ab724eda0a38c7b15ce79bb815af1bd68_prof);

        
        $__internal_d473503fa92d21c5ddab9da036c146968fe818357b0bf7907e54fd32c8b90a71->leave($__internal_d473503fa92d21c5ddab9da036c146968fe818357b0bf7907e54fd32c8b90a71_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtStatistiqueReception:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 252,  434 => 250,  427 => 247,  418 => 246,  390 => 226,  370 => 207,  350 => 188,  330 => 169,  242 => 82,  239 => 81,  230 => 78,  225 => 77,  220 => 76,  218 => 75,  199 => 58,  192 => 56,  186 => 55,  180 => 52,  175 => 51,  172 => 50,  168 => 49,  163 => 48,  159 => 47,  147 => 40,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Statistique des receptions {% endblock %}

{% set menu_statistique_reception       = true %}
{% set menu_statistique_reception_voir  = true %}

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
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    <!-- Modal séléction centre et année -->
    <div id=\"modal-generate\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Génération statististique reception <span id=\"title-type\"></span></h4>
                </div>

                <form>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"type-bilan\" id=\"type-bilan\" />

                        <!-- Centre -->
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"ct-centre\">Séléctionner le centre</label>
                                        <select required id=\"ct-centre\" name=\"ct-centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Alarobia\">
                                                {% for province in provinces %}
                                                <optgroup label=\"{{ province.prvNom }}\">
                                                    {% for centre in centres %}
                                                        {% if province.id == centre.ctProvince.id %}
                                                            <option value=\"{{ centre.id }}\">
                                                                {{ centre.ctrNom }}
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

                        <!-- Type rec -->
                        <div class=\"\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"ct-centre\">Séléctionner le type de reception</label>
                                        <select class=\"form-control select2\" data-placeholder=\"Choisir\" id=\"ct-rec-type\"
                                                style=\"width: 100%;\">
                                            <option value=\"all\" selected=\"selected\">
                                                Tous
                                            </option>
                                            {% if types_rec %}
                                                {% for rcpt in types_rec %}
                                                    <option value=\"{{ rcpt.tprcpLibelle }}\">
                                                        {{ rcpt.tprcpLibelle }}
                                                    </option>
                                                {% endfor %}
                                            {% endif %}

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Année -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-annee\">Séléctionner l'année</label>
                                    <input required id=\"ct-annee\" name=\"ct-annee\" class=\"form-control yearpicker\"
                                           placeholder=\"2017\" />
                                </div>
                            </div>
                        </div>

                        <!-- Semestre  -->
                        <div class=\"row kl-semestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-semestre\">Séléctionner Semestre</label>
                                    <select id=\"id-semestre\" name=\"ct-semestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Trimestre  -->
                        <div class=\"row kl-trimestriel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-trimestre\">Séléctionner trimestre</label>
                                    <select id=\"id-trimestre\" name=\"ct-trimestre\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Mois  -->
                        <div class=\"row kl-mensuel hide\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"ct-mois\">Séléctionner Mois</label>
                                    <select id=\"id-mois\" name=\"ct-mois\" class=\"form-control select2\" style=\"width: 100%;\">
                                        <option value=\"1\">Janvier</option>
                                        <option value=\"2\">Février</option>
                                        <option value=\"3\">Mars</option>
                                        <option value=\"4\">Avril</option>
                                        <option value=\"5\">Mai</option>
                                        <option value=\"6\">Juin</option>
                                        <option value=\"7\">Juillet</option>
                                        <option value=\"8\">Août</option>
                                        <option value=\"9\">Septembre</option>
                                        <option value=\"10\">Octobre</option>
                                        <option value=\"11\">Novembre</option>
                                        <option value=\"12\">Décembre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal-footer\">
                        <div class=\"col-md-4\">
                            <button type=\"submit\" class=\"pull-right btn btn-primary\" id=\"btn-generate\">
                                Valider
                            </button>
                        </div>
                        <div class=\"col-md-offset-2 col-md-6\">
                            <span class=\"pull-left\" id=\"link-download\"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"row\">
        {# Annuel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Annuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('annuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_reception\"/>
                </div>
            </div>
        </div>

        {# Mensuel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Semestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('semestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_reception\"/>
                </div>
            </div>
        </div>

        {# Trimestriel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Trimestriel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('trimestriel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_reception\"/>
                </div>
            </div>
        </div>

        {# Mensuel #}
        <div class=\"col-md-3 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Mensuel</h3>
                </div>

                <div class=\"box-body\">
                    <i class=\"fa fa-file-word-o\"></i> Cliquer sur le boutton pour générer
                </div>

                <div class=\"box-footer\">
                    <input data-toggle=\"modal\" data-target=\"#modal-generate\" type=\"button\"
                           onclick=\"setTypeBilan('mensuel');\" class=\"btn btn-primary\"
                           value=\"Générer\" name=\"generate_statistique_visite\"/>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        var _generate_reporting_ajax_uri = \"{{ path('statistique_reception_generate_reporting_annuel_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/statistique.reception.js') }}\"></script>
{% endblock %}
", "AdminBundle:CtStatistiqueReception:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtStatistiqueReception/index.html.twig");
    }
}
