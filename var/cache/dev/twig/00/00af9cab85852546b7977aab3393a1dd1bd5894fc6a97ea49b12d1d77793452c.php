<?php

/* AdminBundle:CtConstatationAvDedouanementCarac:index.html.twig */
class __TwigTemplate_9c6d2718cdaff2eb662af998d36569ac448c4731a58a44661768a9a46873f9ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanementCarac:index.html.twig", 1);
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
        $__internal_d392afccf5cb7fd770d2de55367539a3449b69b3b4737d6553db76853a4ea24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d392afccf5cb7fd770d2de55367539a3449b69b3b4737d6553db76853a4ea24f->enter($__internal_d392afccf5cb7fd770d2de55367539a3449b69b3b4737d6553db76853a4ea24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:index.html.twig"));

        $__internal_8497b6f278c67ea96c36b288582a81b41c19ac85723263eba4358c0b20dc77c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8497b6f278c67ea96c36b288582a81b41c19ac85723263eba4358c0b20dc77c3->enter($__internal_8497b6f278c67ea96c36b288582a81b41c19ac85723263eba4358c0b20dc77c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:index.html.twig"));

        // line 5
        $context["menu_const_av_ded_type"] = true;
        // line 6
        $context["menu_const_av_ded_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d392afccf5cb7fd770d2de55367539a3449b69b3b4737d6553db76853a4ea24f->leave($__internal_d392afccf5cb7fd770d2de55367539a3449b69b3b4737d6553db76853a4ea24f_prof);

        
        $__internal_8497b6f278c67ea96c36b288582a81b41c19ac85723263eba4358c0b20dc77c3->leave($__internal_8497b6f278c67ea96c36b288582a81b41c19ac85723263eba4358c0b20dc77c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9560867fb25d95476f2da9505ee5761d654d95cdc7c95298e47ceb9c59cbf891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9560867fb25d95476f2da9505ee5761d654d95cdc7c95298e47ceb9c59cbf891->enter($__internal_9560867fb25d95476f2da9505ee5761d654d95cdc7c95298e47ceb9c59cbf891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4ef10b7930f30a2fee2c5d2f5c660eab0cf10370470f198169be7774f3878b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ef10b7930f30a2fee2c5d2f5c660eab0cf10370470f198169be7774f3878b4->enter($__internal_c4ef10b7930f30a2fee2c5d2f5c660eab0cf10370470f198169be7774f3878b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des constatations ";
        
        $__internal_c4ef10b7930f30a2fee2c5d2f5c660eab0cf10370470f198169be7774f3878b4->leave($__internal_c4ef10b7930f30a2fee2c5d2f5c660eab0cf10370470f198169be7774f3878b4_prof);

        
        $__internal_9560867fb25d95476f2da9505ee5761d654d95cdc7c95298e47ceb9c59cbf891->leave($__internal_9560867fb25d95476f2da9505ee5761d654d95cdc7c95298e47ceb9c59cbf891_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bad101706e20ce5c995d6af7b2724d2edaa228654eb5f35453c59b1634afb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bad101706e20ce5c995d6af7b2724d2edaa228654eb5f35453c59b1634afb44->enter($__internal_4bad101706e20ce5c995d6af7b2724d2edaa228654eb5f35453c59b1634afb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_018a70b82e07e1a95ce7803ad31c1e1e64ee0c66672af923656ceed6a12312b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018a70b82e07e1a95ce7803ad31c1e1e64ee0c66672af923656ceed6a12312b8->enter($__internal_018a70b82e07e1a95ce7803ad31c1e1e64ee0c66672af923656ceed6a12312b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo " <br/>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Provenance</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constatations"] ?? $this->getContext($context, "constatations")));
        foreach ($context['_seq'] as $context["_key"] => $context["constatation"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadProvenance", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_edit", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_delete", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constatation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_018a70b82e07e1a95ce7803ad31c1e1e64ee0c66672af923656ceed6a12312b8->leave($__internal_018a70b82e07e1a95ce7803ad31c1e1e64ee0c66672af923656ceed6a12312b8_prof);

        
        $__internal_4bad101706e20ce5c995d6af7b2724d2edaa228654eb5f35453c59b1634afb44->leave($__internal_4bad101706e20ce5c995d6af7b2724d2edaa228654eb5f35453c59b1634afb44_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d12bed4fb3a1e8d651aa205fda9cd39869f860333365e62457a8be58655c228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d12bed4fb3a1e8d651aa205fda9cd39869f860333365e62457a8be58655c228->enter($__internal_9d12bed4fb3a1e8d651aa205fda9cd39869f860333365e62457a8be58655c228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66e5133d7bc056df3d4bb7d1343dbe76443f39b21b4538484112c078c6c02b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e5133d7bc056df3d4bb7d1343dbe76443f39b21b4538484112c078c6c02b83->enter($__internal_66e5133d7bc056df3d4bb7d1343dbe76443f39b21b4538484112c078c6c02b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-const-av-ded').DataTable(
                {
                    \"order\": [[ 0, \"desc\" ]],
                    \"bProcessing\": true,
                    \"bFilter\": true,
                    \"oLanguage\": {
                        \"sProcessing\": \"Traitement...\",
                        \"oPaginate\": {
                            \"sPrevious\": \"Précédente\", // This is the link to the previous page
                            \"sNext\": \"Suivante\", // This is the link to the next page
                        },
                        \"sSearch\": \"Filtrer: \",
                        \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
";
        
        $__internal_66e5133d7bc056df3d4bb7d1343dbe76443f39b21b4538484112c078c6c02b83->leave($__internal_66e5133d7bc056df3d4bb7d1343dbe76443f39b21b4538484112c078c6c02b83_prof);

        
        $__internal_9d12bed4fb3a1e8d651aa205fda9cd39869f860333365e62457a8be58655c228->leave($__internal_9d12bed4fb3a1e8d651aa205fda9cd39869f860333365e62457a8be58655c228_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanementCarac:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des constatations {% endblock %}

{% set menu_const_av_ded_type      = true %}
{% set menu_const_av_ded_type_list = true %}

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
            {{ messages }} <br/>
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('type_const_av_ded_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_const_av_ded_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Provenance</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for constatation in constatations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ constatation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ constatation.cadProvenance }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('const_av_ded_edit', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('const_av_ded_delete', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-const-av-ded').DataTable(
                {
                    \"order\": [[ 0, \"desc\" ]],
                    \"bProcessing\": true,
                    \"bFilter\": true,
                    \"oLanguage\": {
                        \"sProcessing\": \"Traitement...\",
                        \"oPaginate\": {
                            \"sPrevious\": \"Précédente\", // This is the link to the previous page
                            \"sNext\": \"Suivante\", // This is the link to the next page
                        },
                        \"sSearch\": \"Filtrer: \",
                        \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
{% endblock %}
", "AdminBundle:CtConstatationAvDedouanementCarac:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanementCarac/index.html.twig");
    }
}
