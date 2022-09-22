<?php

/* @Admin/CtVisiteExtra/index.html.twig */
class __TwigTemplate_489bb366ba1be5a64c36c7e5c28fb2c8be7eb131a59d724342a9b20a125a58dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtra/index.html.twig", 1);
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
        $__internal_35b8692f4ef61691aadce1bf628d38a562f2e308d4ace35b5dcb281dd0825d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b8692f4ef61691aadce1bf628d38a562f2e308d4ace35b5dcb281dd0825d90->enter($__internal_35b8692f4ef61691aadce1bf628d38a562f2e308d4ace35b5dcb281dd0825d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/index.html.twig"));

        $__internal_c75f66d03b5519b38fd555a468c63c756a860a89c3db72155c71c20bb0c7cf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75f66d03b5519b38fd555a468c63c756a860a89c3db72155c71c20bb0c7cf05->enter($__internal_c75f66d03b5519b38fd555a468c63c756a860a89c3db72155c71c20bb0c7cf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/index.html.twig"));

        // line 5
        $context["menu_visite_extra"] = true;
        // line 6
        $context["menu_visite_extra_type"] = true;
        // line 7
        $context["menu_visite_extra_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b8692f4ef61691aadce1bf628d38a562f2e308d4ace35b5dcb281dd0825d90->leave($__internal_35b8692f4ef61691aadce1bf628d38a562f2e308d4ace35b5dcb281dd0825d90_prof);

        
        $__internal_c75f66d03b5519b38fd555a468c63c756a860a89c3db72155c71c20bb0c7cf05->leave($__internal_c75f66d03b5519b38fd555a468c63c756a860a89c3db72155c71c20bb0c7cf05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9d3368af4f2d5d56a07f9a19b2ea299012d9e89698e5b12a3466a0caffe3567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d3368af4f2d5d56a07f9a19b2ea299012d9e89698e5b12a3466a0caffe3567->enter($__internal_d9d3368af4f2d5d56a07f9a19b2ea299012d9e89698e5b12a3466a0caffe3567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7c37c2f77ee55d2fb5c0d8fa3b350e2d56189b6ca87a449a97be24f519e80e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c37c2f77ee55d2fb5c0d8fa3b350e2d56189b6ca87a449a97be24f519e80e8->enter($__internal_f7c37c2f77ee55d2fb5c0d8fa3b350e2d56189b6ca87a449a97be24f519e80e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des visite_extras ";
        
        $__internal_f7c37c2f77ee55d2fb5c0d8fa3b350e2d56189b6ca87a449a97be24f519e80e8->leave($__internal_f7c37c2f77ee55d2fb5c0d8fa3b350e2d56189b6ca87a449a97be24f519e80e8_prof);

        
        $__internal_d9d3368af4f2d5d56a07f9a19b2ea299012d9e89698e5b12a3466a0caffe3567->leave($__internal_d9d3368af4f2d5d56a07f9a19b2ea299012d9e89698e5b12a3466a0caffe3567_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbff2eea947c7538cecd1af6a2d311977eb7ec6c4aeba6dcb20bf209df7f889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbff2eea947c7538cecd1af6a2d311977eb7ec6c4aeba6dcb20bf209df7f889d->enter($__internal_bbff2eea947c7538cecd1af6a2d311977eb7ec6c4aeba6dcb20bf209df7f889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad0af924885865e24fd7f3549ca2b00d4ce51de3c0608a858b377dcbae906f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0af924885865e24fd7f3549ca2b00d4ce51de3c0608a858b377dcbae906f62->enter($__internal_ad0af924885865e24fd7f3549ca2b00d4ce51de3c0608a858b377dcbae906f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une visite extra
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite_extra\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Libelle</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visite_extras"] ?? $this->getContext($context, "visite_extras")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite_extra"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "vsteLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_edit", array("id" => $this->getAttribute($context["visite_extra"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_delete", array("id" => $this->getAttribute($context["visite_extra"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite_extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                        ";
        // line 79
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
        
        $__internal_ad0af924885865e24fd7f3549ca2b00d4ce51de3c0608a858b377dcbae906f62->leave($__internal_ad0af924885865e24fd7f3549ca2b00d4ce51de3c0608a858b377dcbae906f62_prof);

        
        $__internal_bbff2eea947c7538cecd1af6a2d311977eb7ec6c4aeba6dcb20bf209df7f889d->leave($__internal_bbff2eea947c7538cecd1af6a2d311977eb7ec6c4aeba6dcb20bf209df7f889d_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1e895fd88734a3630d9370d1e3d036c39283830d1ae376387d68a9b625524ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e895fd88734a3630d9370d1e3d036c39283830d1ae376387d68a9b625524ef->enter($__internal_e1e895fd88734a3630d9370d1e3d036c39283830d1ae376387d68a9b625524ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_808f40102350aa29ceace27578465e0c729a68d2534c7b7a4007243e69bbf000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808f40102350aa29ceace27578465e0c729a68d2534c7b7a4007243e69bbf000->enter($__internal_808f40102350aa29ceace27578465e0c729a68d2534c7b7a4007243e69bbf000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-visite_extra').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune visite extra trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_808f40102350aa29ceace27578465e0c729a68d2534c7b7a4007243e69bbf000->leave($__internal_808f40102350aa29ceace27578465e0c729a68d2534c7b7a4007243e69bbf000_prof);

        
        $__internal_e1e895fd88734a3630d9370d1e3d036c39283830d1ae376387d68a9b625524ef->leave($__internal_e1e895fd88734a3630d9370d1e3d036c39283830d1ae376387d68a9b625524ef_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtra/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  236 => 92,  215 => 79,  210 => 75,  198 => 69,  191 => 65,  185 => 62,  180 => 60,  176 => 58,  172 => 57,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des visite_extras {% endblock %}

{% set menu_visite_extra           = true %}
{% set menu_visite_extra_type      = true %}
{% set menu_visite_extra_type_list = true %}

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
                    <a href=\"{{ path('visite_extra_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une visite extra
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('visite_extra_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite_extra\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Libelle</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for visite_extra in visite_extras %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ visite_extra.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ visite_extra.vsteLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('visite_extra_edit', { 'id': visite_extra.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('visite_extra_delete', { 'id': visite_extra.id }) }}\">
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
            \$('#list-visite_extra').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune visite extra trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtVisiteExtra/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtra\\index.html.twig");
    }
}
