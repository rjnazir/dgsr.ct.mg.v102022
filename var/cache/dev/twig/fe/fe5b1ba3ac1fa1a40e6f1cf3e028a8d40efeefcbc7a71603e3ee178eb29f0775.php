<?php

/* AdminBundle:CtMarque:index.html.twig */
class __TwigTemplate_b572e8401ee7ed6a6fbdb94f91ae390bce3c99802a3f2ae98d479c18c8975784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:index.html.twig", 1);
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
        $__internal_2b28f266a99ad43f300e5f4a3abc6eeaeeabfd59086bb78e35fc33a4b7b1641a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b28f266a99ad43f300e5f4a3abc6eeaeeabfd59086bb78e35fc33a4b7b1641a->enter($__internal_2b28f266a99ad43f300e5f4a3abc6eeaeeabfd59086bb78e35fc33a4b7b1641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:index.html.twig"));

        $__internal_1a85d711b538acd19cd0ef1d25d252a43c603f372c90ea309ab7e53cdf5119ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a85d711b538acd19cd0ef1d25d252a43c603f372c90ea309ab7e53cdf5119ee->enter($__internal_1a85d711b538acd19cd0ef1d25d252a43c603f372c90ea309ab7e53cdf5119ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:index.html.twig"));

        // line 5
        $context["menu_marque"] = true;
        // line 6
        $context["menu_marque_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b28f266a99ad43f300e5f4a3abc6eeaeeabfd59086bb78e35fc33a4b7b1641a->leave($__internal_2b28f266a99ad43f300e5f4a3abc6eeaeeabfd59086bb78e35fc33a4b7b1641a_prof);

        
        $__internal_1a85d711b538acd19cd0ef1d25d252a43c603f372c90ea309ab7e53cdf5119ee->leave($__internal_1a85d711b538acd19cd0ef1d25d252a43c603f372c90ea309ab7e53cdf5119ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_990b47b19c0a08a951a30671e12e0963ffb6e1ff8ff83b824fd6f681bb93cd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990b47b19c0a08a951a30671e12e0963ffb6e1ff8ff83b824fd6f681bb93cd7e->enter($__internal_990b47b19c0a08a951a30671e12e0963ffb6e1ff8ff83b824fd6f681bb93cd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_887e89b4fe2527e4de2401f693983931bc42d1afe3a3c03cae8c9cdc526e929f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887e89b4fe2527e4de2401f693983931bc42d1afe3a3c03cae8c9cdc526e929f->enter($__internal_887e89b4fe2527e4de2401f693983931bc42d1afe3a3c03cae8c9cdc526e929f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des marques ";
        
        $__internal_887e89b4fe2527e4de2401f693983931bc42d1afe3a3c03cae8c9cdc526e929f->leave($__internal_887e89b4fe2527e4de2401f693983931bc42d1afe3a3c03cae8c9cdc526e929f_prof);

        
        $__internal_990b47b19c0a08a951a30671e12e0963ffb6e1ff8ff83b824fd6f681bb93cd7e->leave($__internal_990b47b19c0a08a951a30671e12e0963ffb6e1ff8ff83b824fd6f681bb93cd7e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbe2d86d2cd186ee03c565a3f1bb47a164ee77b2fb9eee4c136bfad1078588ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe2d86d2cd186ee03c565a3f1bb47a164ee77b2fb9eee4c136bfad1078588ad->enter($__internal_dbe2d86d2cd186ee03c565a3f1bb47a164ee77b2fb9eee4c136bfad1078588ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef67fc96be8882c5b4d0fee682cb56b103fe557845cb63d24d73127ad336f52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef67fc96be8882c5b4d0fee682cb56b103fe557845cb63d24d73127ad336f52a->enter($__internal_ef67fc96be8882c5b4d0fee682cb56b103fe557845cb63d24d73127ad336f52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marques"] ?? $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "mrqLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_edit", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
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
        
        $__internal_ef67fc96be8882c5b4d0fee682cb56b103fe557845cb63d24d73127ad336f52a->leave($__internal_ef67fc96be8882c5b4d0fee682cb56b103fe557845cb63d24d73127ad336f52a_prof);

        
        $__internal_dbe2d86d2cd186ee03c565a3f1bb47a164ee77b2fb9eee4c136bfad1078588ad->leave($__internal_dbe2d86d2cd186ee03c565a3f1bb47a164ee77b2fb9eee4c136bfad1078588ad_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_206eecd5f4d35924f788ede280eb9b49c35a2b0070d40f0b724147abcc4cb643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206eecd5f4d35924f788ede280eb9b49c35a2b0070d40f0b724147abcc4cb643->enter($__internal_206eecd5f4d35924f788ede280eb9b49c35a2b0070d40f0b724147abcc4cb643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af8a18c81902633ea5a1b2fa73961b4fb07973da47a668169b6cf484c90e8735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8a18c81902633ea5a1b2fa73961b4fb07973da47a668169b6cf484c90e8735->enter($__internal_af8a18c81902633ea5a1b2fa73961b4fb07973da47a668169b6cf484c90e8735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-marque').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_af8a18c81902633ea5a1b2fa73961b4fb07973da47a668169b6cf484c90e8735->leave($__internal_af8a18c81902633ea5a1b2fa73961b4fb07973da47a668169b6cf484c90e8735_prof);

        
        $__internal_206eecd5f4d35924f788ede280eb9b49c35a2b0070d40f0b724147abcc4cb643->leave($__internal_206eecd5f4d35924f788ede280eb9b49c35a2b0070d40f0b724147abcc4cb643_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:index.html.twig";
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

{% block title %}{{ parent() }} Liste des marques {% endblock %}

{% set menu_marque      = true %}
{% set menu_marque_list = true %}

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
                    <a href=\"{{ path('marque_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('marque_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for marque in marques %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ marque.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ marque.mrqLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('marque_edit', { 'id': marque.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('marque_delete', { 'id': marque.id }) }}\">
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
            \$('#list-marque').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtMarque:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/index.html.twig");
    }
}
