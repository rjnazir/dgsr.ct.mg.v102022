<?php

/* @Admin/CtConstatationAvDedouanementCarac/add.html.twig */
class __TwigTemplate_8ad108c5393af645ba2245973795dca24d5e527d6395542e8bbf2aad7404e43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_590f2368af9a0920a45604f243ce4534f34ed4cae908a225839ce1bd8f4c867b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590f2368af9a0920a45604f243ce4534f34ed4cae908a225839ce1bd8f4c867b->enter($__internal_590f2368af9a0920a45604f243ce4534f34ed4cae908a225839ce1bd8f4c867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig"));

        $__internal_47a219499a65bb7525dd49605879dc2c1ce7944a938e6483f36f7799f2f7636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a219499a65bb7525dd49605879dc2c1ce7944a938e6483f36f7799f2f7636f->enter($__internal_47a219499a65bb7525dd49605879dc2c1ce7944a938e6483f36f7799f2f7636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_590f2368af9a0920a45604f243ce4534f34ed4cae908a225839ce1bd8f4c867b->leave($__internal_590f2368af9a0920a45604f243ce4534f34ed4cae908a225839ce1bd8f4c867b_prof);

        
        $__internal_47a219499a65bb7525dd49605879dc2c1ce7944a938e6483f36f7799f2f7636f->leave($__internal_47a219499a65bb7525dd49605879dc2c1ce7944a938e6483f36f7799f2f7636f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e84ea1238ec51d9d2420027838d19d178c52adf3925965c0117216d78d7f4f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84ea1238ec51d9d2420027838d19d178c52adf3925965c0117216d78d7f4f6f->enter($__internal_e84ea1238ec51d9d2420027838d19d178c52adf3925965c0117216d78d7f4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f215dce5373c217cd3d94c7e305113f8e80a59b8e161d1a6cab61a3a01813ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f215dce5373c217cd3d94c7e305113f8e80a59b8e161d1a6cab61a3a01813ea->enter($__internal_0f215dce5373c217cd3d94c7e305113f8e80a59b8e161d1a6cab61a3a01813ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_0f215dce5373c217cd3d94c7e305113f8e80a59b8e161d1a6cab61a3a01813ea->leave($__internal_0f215dce5373c217cd3d94c7e305113f8e80a59b8e161d1a6cab61a3a01813ea_prof);

        
        $__internal_e84ea1238ec51d9d2420027838d19d178c52adf3925965c0117216d78d7f4f6f->leave($__internal_e84ea1238ec51d9d2420027838d19d178c52adf3925965c0117216d78d7f4f6f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_32609c6d4593e58958b49cf3ccd2a0ad16eaab8585c9831c7de16ae683b6bce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32609c6d4593e58958b49cf3ccd2a0ad16eaab8585c9831c7de16ae683b6bce4->enter($__internal_32609c6d4593e58958b49cf3ccd2a0ad16eaab8585c9831c7de16ae683b6bce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6eb93acf8696065fa5de473243b364ad3881d222e41f22358e50935a6f9b1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6eb93acf8696065fa5de473243b364ad3881d222e41f22358e50935a6f9b1b7->enter($__internal_e6eb93acf8696065fa5de473243b364ad3881d222e41f22358e50935a6f9b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
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
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedType", array()), 'row');
        echo "
                    ";
        // line 33
        echo "                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_carac_index");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e6eb93acf8696065fa5de473243b364ad3881d222e41f22358e50935a6f9b1b7->leave($__internal_e6eb93acf8696065fa5de473243b364ad3881d222e41f22358e50935a6f9b1b7_prof);

        
        $__internal_32609c6d4593e58958b49cf3ccd2a0ad16eaab8585c9831c7de16ae683b6bce4->leave($__internal_32609c6d4593e58958b49cf3ccd2a0ad16eaab8585c9831c7de16ae683b6bce4_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtConstatationAvDedouanementCarac/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  129 => 33,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_const_av_ded                = true %}
{% set menu_const_av_ded_type_create    = true %}

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

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.ctConstAvDedType) }}
                    {#{{ form_row(form.ctConstAvDed.ctVerificateur) }}#}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"{{ path('const_av_ded_carac_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtConstatationAvDedouanementCarac\\add.html.twig");
    }
}
