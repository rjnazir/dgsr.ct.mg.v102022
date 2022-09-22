<?php

/* AdminBundle:CtTypeReception:index.html.twig */
class __TwigTemplate_98e459873bfdc3319bd488de54982dc9abad3e58ff6b71819de9528c6f72b043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeReception:index.html.twig", 1);
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
        $__internal_479b2f1695a658344e687e4a7631321f68ad029b5820f10d092ba4b0eb97a6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479b2f1695a658344e687e4a7631321f68ad029b5820f10d092ba4b0eb97a6ba->enter($__internal_479b2f1695a658344e687e4a7631321f68ad029b5820f10d092ba4b0eb97a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:index.html.twig"));

        $__internal_c45449c6b120cac39034760fae9dc63aab8cfe3c0e46bd7356ca6875ef5b2c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45449c6b120cac39034760fae9dc63aab8cfe3c0e46bd7356ca6875ef5b2c85->enter($__internal_c45449c6b120cac39034760fae9dc63aab8cfe3c0e46bd7356ca6875ef5b2c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:index.html.twig"));

        // line 5
        $context["menu_reception"] = true;
        // line 6
        $context["menu_type_reception"] = true;
        // line 7
        $context["menu_type_reception_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_479b2f1695a658344e687e4a7631321f68ad029b5820f10d092ba4b0eb97a6ba->leave($__internal_479b2f1695a658344e687e4a7631321f68ad029b5820f10d092ba4b0eb97a6ba_prof);

        
        $__internal_c45449c6b120cac39034760fae9dc63aab8cfe3c0e46bd7356ca6875ef5b2c85->leave($__internal_c45449c6b120cac39034760fae9dc63aab8cfe3c0e46bd7356ca6875ef5b2c85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f34a3b6da3404df08b8e113b01fa09658b8aa655819561dc44dfeb08f76ec067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34a3b6da3404df08b8e113b01fa09658b8aa655819561dc44dfeb08f76ec067->enter($__internal_f34a3b6da3404df08b8e113b01fa09658b8aa655819561dc44dfeb08f76ec067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dec8f9f45e480bcd31fdfeb97f184f0be5599697bbd57647c7de91c6547e4c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec8f9f45e480bcd31fdfeb97f184f0be5599697bbd57647c7de91c6547e4c01->enter($__internal_dec8f9f45e480bcd31fdfeb97f184f0be5599697bbd57647c7de91c6547e4c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des type_receptions ";
        
        $__internal_dec8f9f45e480bcd31fdfeb97f184f0be5599697bbd57647c7de91c6547e4c01->leave($__internal_dec8f9f45e480bcd31fdfeb97f184f0be5599697bbd57647c7de91c6547e4c01_prof);

        
        $__internal_f34a3b6da3404df08b8e113b01fa09658b8aa655819561dc44dfeb08f76ec067->leave($__internal_f34a3b6da3404df08b8e113b01fa09658b8aa655819561dc44dfeb08f76ec067_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a21b9ff7ee57f41600a78f9e9bfca42a9112cdf3e00067b2070b0c1af52d203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a21b9ff7ee57f41600a78f9e9bfca42a9112cdf3e00067b2070b0c1af52d203->enter($__internal_5a21b9ff7ee57f41600a78f9e9bfca42a9112cdf3e00067b2070b0c1af52d203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5ee0e72c6abe7ce87e29956a390a58f2c3f8163ed24d2ecd684b945b1fd04e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ee0e72c6abe7ce87e29956a390a58f2c3f8163ed24d2ecd684b945b1fd04e8->enter($__internal_d5ee0e72c6abe7ce87e29956a390a58f2c3f8163ed24d2ecd684b945b1fd04e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de réception
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type_reception\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_receptions"] ?? $this->getContext($context, "type_receptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_reception"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_reception"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_reception"], "tprcpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_edit", array("id" => $this->getAttribute($context["type_reception"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_delete", array("id" => $this->getAttribute($context["type_reception"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_reception'], $context['_parent'], $context['loop']);
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
        
        $__internal_d5ee0e72c6abe7ce87e29956a390a58f2c3f8163ed24d2ecd684b945b1fd04e8->leave($__internal_d5ee0e72c6abe7ce87e29956a390a58f2c3f8163ed24d2ecd684b945b1fd04e8_prof);

        
        $__internal_5a21b9ff7ee57f41600a78f9e9bfca42a9112cdf3e00067b2070b0c1af52d203->leave($__internal_5a21b9ff7ee57f41600a78f9e9bfca42a9112cdf3e00067b2070b0c1af52d203_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ca707f3f810f34d4cdf6cfc108baf53c15e4c5a3e5572afc72ccd0882e6d17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca707f3f810f34d4cdf6cfc108baf53c15e4c5a3e5572afc72ccd0882e6d17e->enter($__internal_5ca707f3f810f34d4cdf6cfc108baf53c15e4c5a3e5572afc72ccd0882e6d17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_868cc4d06d79382d9211450ee9435d59ccfb68cbd2f0440a2eafd9a7f2c401f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868cc4d06d79382d9211450ee9435d59ccfb68cbd2f0440a2eafd9a7f2c401f9->enter($__internal_868cc4d06d79382d9211450ee9435d59ccfb68cbd2f0440a2eafd9a7f2c401f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type_reception').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de réception trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_868cc4d06d79382d9211450ee9435d59ccfb68cbd2f0440a2eafd9a7f2c401f9->leave($__internal_868cc4d06d79382d9211450ee9435d59ccfb68cbd2f0440a2eafd9a7f2c401f9_prof);

        
        $__internal_5ca707f3f810f34d4cdf6cfc108baf53c15e4c5a3e5572afc72ccd0882e6d17e->leave($__internal_5ca707f3f810f34d4cdf6cfc108baf53c15e4c5a3e5572afc72ccd0882e6d17e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeReception:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 92,  235 => 91,  214 => 78,  209 => 74,  197 => 68,  190 => 64,  184 => 61,  179 => 59,  175 => 57,  171 => 56,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des type_receptions {% endblock %}

{% set menu_reception           = true %}
{% set menu_type_reception      = true %}
{% set menu_type_reception_list = true %}

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
                    <a href=\"{{ path('type_reception_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de réception
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_reception_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type_reception\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for type_reception in type_receptions %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ type_reception.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ type_reception.tprcpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_reception_edit', { 'id': type_reception.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_reception_delete', { 'id': type_reception.id }) }}\">
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
            \$('#list-type_reception').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de réception trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtTypeReception:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeReception/index.html.twig");
    }
}
